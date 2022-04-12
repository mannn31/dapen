<?php

namespace App\Http\Controllers;

use App\Models\Dbarang;
use App\Http\Requests\StoreDbarangRequest;
use App\Http\Requests\UpdateDbarangRequest;
use App\Models\Jbarang;

class DbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!auth()->check()){
            abort(403);
        }

        return view('pages.dbarang',[
            'page' => 'Data Barang',
            'dbarangs' => Dbarang::all(),
            'jbarangs' => Jbarang::all()
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
        $validatedData = $request->all();
        
        Dbarang::create($validatedData);

        return redirect('/dbarang')->with('succes', 'Login Succes');
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
        return view('pages.edit-dbarang', [
            'page' => 'Edit Jenis Barang',
            'dbarang' => $dbarang,
            'dbarangs' => Dbarang::all(),
            'jbarangs' => Jbarang::all()
        ]);
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
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'jbarangs_id' => 'required',
            'stok' => 'required',
        ]);
        
        Dbarang::where('id', $dbarang->id)
               ->update($validatedData);

        return redirect('/dbarang')->with('succes', 'Login Succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dbarang  $dbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dbarang $dbarang)
    {
        Dbarang::destroy($dbarang->id);

        return redirect('/dbarang')->with('succes', 'Login Succes');
    }
}
