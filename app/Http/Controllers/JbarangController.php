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
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jbarang  $jbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(jbarang $jbarang)
    {
        //
    }
}
