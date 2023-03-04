<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CompanyProduct;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('company_products')->get();
        
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Check validator
         $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'detail' => 'required|string'
        ]);

        // If Validator Fails
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        // Create Data
        $products = CompanyProduct::create([
            'name' => $request->name,
            'detail' => $request->detail
            
        ]);

        // Return Message And Data
        return response()->json(['products Create Successfully',($products)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = DB::table('company_products')->find($id);
        return response()->json($products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $products = DB::table('company_products')->where('id',$id);
        
        $products->name = $request->name;
        $products->detail = $request->detail;
        $products->update([
            'name'=> $products->name,
            'detail' => $products->detail
        ]);
        //dd($products);
        return response()->json(['Products Update Successfully',new ProductResource($products)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = DB::table('company_products')->where('id',$id)->delete();
       
        // Return Message
        return response()->json('Products Deleted Successfully');
    }
}
