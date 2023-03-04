<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectReportController extends Controller
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
        $reports = DB::table('company_project_incomes')
            ->join('company_projects', 'company_project_incomes.company_project_id', '=', 'company_projects.id')
            ->select(
                'company_projects.name as name',
                DB::raw('sum(CASE WHEN company_project_incomes.status = "income" THEN company_project_incomes.amount END) income'),
                DB::raw('sum(CASE WHEN company_project_incomes.status = "outcome" THEN company_project_incomes.amount END) outcome')
            )
            ->groupBy('company_projects.name')
            ->get();

            return response()->json($reports);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
