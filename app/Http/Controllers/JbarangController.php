<?php

namespace App\Http\Controllers;

use App\Models\Jbarang;
use App\Http\Requests\StorejbarangRequest;
use App\Http\Requests\UpdatejbarangRequest;

class JbarangController extends Controller
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
        
        return view('pages.jbarang',[
            'page' => 'Jenis Barang',
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
     * @param  \App\Http\Requests\StorejbarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejbarangRequest $request)
    {
        $validatedData = $request->validate([
            'nama_jenis' => 'required|unique:jbarangs',
        ]);
        
        Jbarang::create($validatedData);

        return redirect('/jbarang')->with('succes', 'Login Succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jbarang  $jbarang
     * @return \Illuminate\Http\Response
     */
    public function show(jbarang $jbarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jbarang  $jbarang
     * @return \Illuminate\Http\Response
     */
    public function edit(jbarang $jbarang)
    {
        return view('pages.edit-jbarang', [
            'page' => 'Edit Jenis Barang',
            'jbarang' => $jbarang,
            'jbarangs' => Jbarang::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejbarangRequest  $request
     * @param  \App\Models\jbarang  $jbarang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejbarangRequest $request, jbarang $jbarang)
    {
        $validatedData = $request->validate([
            'nama_jenis' => 'required|max:255',
        ]);
        
        Jbarang::where('id', $jbarang->id)
               ->update($validatedData);

        return redirect('/jbarang')->with('succes', 'Login Succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jbarang  $jbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(jbarang $jbarang)
    {
        Jbarang::destroy($jbarang->id);

        return redirect('/jbarang')->with('succes', 'Login Succes');
    }
}
