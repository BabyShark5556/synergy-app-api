<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\CompanyProjectIncome;
use App\Models\CompanyProject;
use App\Models\CompanyProduct;
use App\Http\Resources\IncomeResource;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth:api', ['except' => ['login','register']]);
     }

     
    public function index()
    {

        $company_projects = DB::table('company_project_incomes')
                        ->select('company_project_incomes.id','company_project_incomes.income_date as date','company_project_incomes.note',
                                'company_project_incomes.amount','company_project_incomes.mul','company_project_incomes.status',
                                'company_project_incomes.created_at','company_project_incomes.updated_at','company_projects.id as company_project_id',
                                'company_projects.name as company_project_name','company_projects.detail as company_project_detail',
                                'company_products.id as company_product_id','company_products.name as company_product_name',
                                'company_products.detail as company_product_detail')
                        ->join('company_projects','company_projects.id','company_project_incomes.company_project_id')
                        ->join('company_products','company_products.id','company_projects.company_product_id')
                        ->get();
                        

        return response()->json([$company_projects]);
    }

    public function income()
    {

        $incomes = DB::table('company_project_incomes')
                        ->select('company_project_incomes.id','company_project_incomes.income_date as date','company_project_incomes.note',
                                'company_project_incomes.amount','company_project_incomes.mul','company_project_incomes.status',
                                'company_project_incomes.created_at','company_project_incomes.updated_at','company_projects.id as company_project_id',
                                'company_projects.name as company_project_name','company_projects.detail as company_project_detail',
                                'company_products.id as company_product_id','company_products.name as company_product_name',
                                'company_products.detail as company_product_detail')
                        ->join('company_projects','company_projects.id','company_project_incomes.company_project_id')
                        ->join('company_products','company_products.id','company_projects.company_product_id')
                        ->where('status', 'income')
                        ->get();

        return response()->json([$incomes]);
    }

    public function outcome()
    {

        $outcomes = DB::table('company_project_incomes')
                        ->select('company_project_incomes.id','company_project_incomes.income_date as date','company_project_incomes.note',
                                'company_project_incomes.amount','company_project_incomes.mul','company_project_incomes.status',
                                'company_project_incomes.created_at','company_project_incomes.updated_at','company_projects.id as company_project_id',
                                'company_projects.name as company_project_name','company_projects.detail as company_project_detail',
                                'company_products.id as company_product_id','company_products.name as company_product_name',
                                'company_products.detail as company_product_detail')
                        ->join('company_projects','company_projects.id','company_project_incomes.company_project_id')
                        ->join('company_products','company_products.id','company_projects.company_product_id')
                        ->where('status', 'outcome')
                        ->get();

        return response()->json([$outcomes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'income_date' => 'required',
                'amount' => 'required',
                'status' => 'required',
                'company_project_id' => 'required',
         
        ],
        [
            'income_date.required' => "ກາລຸນາປ້ອນວັນທີ",
            'amount.required' => "ກາລຸນາປ້ອນຈຳນວນເງິນ",
            'company_project_id.required' => "ກາລຸນາເລືອກໂປຣເຈັກ",
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        
        $company_project_income = new CompanyProjectIncome;
        $company_project_income->income_date = $request->income_date;
        $company_project_income->note = $request->note;
        $company_project_income->amount = $request->amount;
        $company_project_income->status = $request->status;
        $company_project_income->company_project_id = $request->company_project_id;

        $company_project_income->save();

        $notification = array(
            'message' => 'ບັນທຶກຂໍ້ມູນສຳເລັດແລ້ວ',
            'alert-type' => 'success',
        );

        return response()->json(['company_project_incomes Create Successfully',$notification]);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $incomes = DB::table('company_project_incomes')
                        ->select('company_project_incomes.id','company_project_incomes.income_date as date','company_project_incomes.note',
                                'company_project_incomes.amount','company_project_incomes.mul','company_project_incomes.status',
                                'company_project_incomes.created_at','company_project_incomes.updated_at','company_projects.id as company_project_id',
                                'company_projects.name as company_project_name','company_projects.detail as company_project_detail',
                                'company_products.id as company_product_id','company_products.name as company_product_name',
                                'company_products.detail as company_product_detail')
                        ->join('company_projects','company_projects.id','company_project_incomes.company_project_id')
                        ->join('company_products','company_products.id','company_projects.company_product_id')
                        ->where('company_project_incomes.id',$id)
                        ->get();
                        
        return response()->json($incomes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $company_project_income = CompanyProjectIncome::where('id',$id)->first();
                                    // dd($company_project_income);
        $company_project_income->income_date = $request->income_date;
        $company_project_income->note = $request->note;
        $company_project_income->amount = $request->amount;
        $company_project_income->status = $request->status;
        $company_project_income->company_project_id = $request->company_project_id;
        
        $company_project_income->update([
            'income_date' => $company_project_income->income_date,
            'note' => $company_project_income->note,
            'amount' => $company_project_income->amount,
            'status' => $company_project_income->status,
            'company_project_id' => $company_project_income->company_project_id
        ]);
       
        
        return response()->json(['company_project_incomes Update Successfully',new IncomeResource($company_project_income)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incomes = DB::table('company_project_incomes')->where('id',$id)->delete();
       
        // Return Message
        return response()->json('company_project Deleted Successfully');
    }
}
