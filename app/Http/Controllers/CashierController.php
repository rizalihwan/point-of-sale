<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Goods, Report, Transaction};

class CashierController extends Controller
{
    public function index()
    {
        return view('main.cashier.index',[
            'goods' => Goods::get()
        ]);
    }
    public function pay($id)
    {
        return redirect()->back()->with('pay',Goods::findOrFail($id));
    }
    public function purchase(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required',
            'input' => 'required',
            'money' => 'required',
            'total' => 'required',
            'returns' => 'required'
        ]);
            $sum = Goods::findOrFail($request->id);
            Goods::where('id',$request->id)->update([
                'stock' => $sum->stock - $request->input
            ]);
            Transaction::create([
                'goods_id' =>  $request->id,
                'user_id' => auth()->user()->id,
                'stock' => $request->input,
                'total' => $request->total
            ]);
            Report::create([
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description,
                'input' => $request->input,
                'money' => $request->money,
                'total' => $request->total,
                'returns' => $request->returns
            ]);
            session()->flash('success', 'Purchased Success!');
            return back();
    }
}
