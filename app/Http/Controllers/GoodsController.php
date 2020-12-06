<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\{Goods, Merk, Distributor};

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.admin.goods.index', [
            'goods' => Goods::get(),
            'merks' => Merk::get(),
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
            'merk_id' => 'required',
            'distributor_id' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required'
        ]);
        Goods::create($request->all());
        session()->flash('success', 'Data Disave!');
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
        return view('main.admin.goods.edit', [
            'goods' => Goods::findOrFail($id),
            'merks' => Merk::get(),
            'distributors' => Distributor::get()
        ]);
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
            'merk_id' => 'required',
            'distributor_id' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required'
        ]);
        $goods = Goods::findOrFail($id);
        $goods->update($request->all());
        session()->flash('success', 'Data Diupdate!');
        return redirect()->route('menu.goods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goods = Goods::findOrFail($id);
        $goods->delete();
        session()->flash('success', 'Data Dihapus!');
        return back();
    }

    public function search(Request $request)
    {
        return view('main.admin.goods.index', [
            'goods' => Goods::where('name', 'like','%'.$request->search.'%')->get(),
            'merks' => Merk::get(),
            'distributors' => Distributor::get()
        ]);
    }
}
