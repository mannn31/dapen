<?php

namespace App\Http\Controllers;

use App\Models\Dbarang;
use App\Http\Requests\StoreDbarangRequest;
use App\Http\Requests\UpdateDbarangRequest;

class DbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dbarang',[
            'page' => 'Data Barang'
        ]);
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
     * @param  \App\Http\Requests\StoreDbarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDbarangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dbarang  $dbarang
     * @return \Illuminate\Http\Response
     */
    public function show(Dbarang $dbarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dbarang  $dbarang
     * @return \Illuminate\Http\Response
     */
    public function edit(Dbarang $dbarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDbarangRequest  $request
     * @param  \App\Models\Dbarang  $dbarang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDbarangRequest $request, Dbarang $dbarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dbarang  $dbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dbarang $dbarang)
    {
        //
    }
}
