<?php

namespace App\Http\Controllers;

use App\Models\okpadmincrud;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;

class OkpAdminCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('id','name','email','created_at','updated_at')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('okpadmincrud.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\okpadmincrud  $okpadmincrud
     * @return \Illuminate\Http\Response
     */
    public function show(okpadmincrud $okpadmincrud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\okpadmincrud  $okpadmincrud
     * @return \Illuminate\Http\Response
     */
    public function edit(okpadmincrud $okpadmincrud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\okpadmincrud  $okpadmincrud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, okpadmincrud $okpadmincrud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\okpadmincrud  $okpadmincrud
     * @return \Illuminate\Http\Response
     */
    public function destroy(okpadmincrud $okpadmincrud)
    {
        //
    }
}
