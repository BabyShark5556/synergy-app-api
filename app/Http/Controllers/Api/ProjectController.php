<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectResource;
use App\Models\CompanyProject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
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
        $projects = DB::table('company_projects')->get();
        return response()->json($projects);
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
            'name' => 'required|string',
            'detail' => 'required|string',
         
        ]);
       
        //If Validator Fails
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        //dd($validator);
        // Create Data
        $projects = CompanyProject::create([
            'name' => $request->name,
            'detail' => $request->detail,
            'company_product_id' => $request->product
            
        ]);

        // Return Message And Data
        return response()->json(['projects Create Successfully',new ProjectResource($projects)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects = DB::table('company_projects')->find($id);
        return response()->json($projects);
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
        $projects = DB::table('company_projects')->where('id',$id);
        
        $projects->name = $request->name;
        $projects->detail = $request->detail;
        $projects->company_product_id = $request->product;
        $projects->update([
            'name'=> $projects->name,
            'detail' => $projects->detail,
            'company_product_id' => $projects->company_product_id
        ]);

        return response()->json(['Projects Update Successfully',new ProjectResource($projects)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = DB::table('company_projects')->where('id',$id)->delete();
       
        // Return Message
        return response()->json('Projects Deleted Successfully');
    }
}
