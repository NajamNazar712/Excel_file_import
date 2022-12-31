<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\SalesDataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SalesDataDump;

class SalesDataDumpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('test');
        $request->validate([
            'file' =>  'file|required'
        ]);

        try{
            Excel::import(new SalesDataImport, request()->file('file'));
            return back()->with('success', 'Succesfully Uploaded');
            //return response()->json('uploaded');

        }catch(\Throwable $th){

            return back()->withError($th->getMessage());
            //return response()->json($th->getMessage());
        }       

       
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
