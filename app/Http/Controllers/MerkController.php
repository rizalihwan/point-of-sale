<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Merk;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.admin.merek.index',[
            'merks' => Merk::get()
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'merk' => 'required'
        ]);
        Merk::create($request->all());
        return back();
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
        $merk = Merk::findOrFail($id);
        return view('main.admin.merek.edit', compact('merk'));
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
        
        $this->validate($request, [
            'merk' => 'required'
        ]);
        $merk = Merk::findOrFail($id);
        $merk->update($request->all());
        return redirect()->route('menu.merk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merk = Merk::findOrFail($id);
        $merk->goods()->where('merk_id', $id)->delete();
        $merk->delete();
        return back();
    }
    
    public function search(Request $request)
    {
        return view('main.admin.merek.index', [
            'merks' => Merk::where('merk', 'like','%'.$request->search.'%')->get()
        ]);
    }
}
