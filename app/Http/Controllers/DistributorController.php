<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Distributor;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.admin.distributor.index', [
            'distributors' => Distributor::get()
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
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);
        Distributor::create($request->all());
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
        $distributor = Distributor::findOrFail($id);
        return view('main.admin.distributor.edit', compact('distributor'));
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
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);
        $distributor = Distributor::findOrFail($id);
        $distributor->update($request->all());
        return redirect()->route('menu.distributor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distributor = Distributor::findOrFail($id);
        $distributor->goods()->where('distributor_id', $id)->delete();
        $distributor->delete();
        return back();
    }
    
    public function search(Request $request)
    {
        return view('main.admin.distributor.index', [
            'distributors' => Distributor::where('name', 'like','%'.$request->search.'%')->get()
        ]);
    }
}
