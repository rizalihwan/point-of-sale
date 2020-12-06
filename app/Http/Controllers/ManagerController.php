<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Report;
use App\Transaction;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        return view('main.manager.index',[
            'reports' => Report::get(),
            'stock' => Report::get()->sum('stock'),
            'total' => Report::get()->sum('total'),
            'count' => Goods::get()->sum('stock'),
            'goods' => Goods::get()->count(),
            'transactions' => Transaction::get(),
            'goodst' => Goods::get()
        ]);
    }
    public function date()
    {
        $data = Goods::orderBy('created_at')->get();
        
        return view('main.manager.index',[
            'reports' => Report::get(),
            'stock' => Report::get()->sum('stock'),
            'total' => Report::get()->sum('total'),
            'count' => Goods::get()->sum('stock'),
            'goods' => Goods::get()->count(),
            'transactions' => Transaction::get(),
            'goodst' => $data
        ]);
    }
    
    public function stock()
    {
        $data = Goods::orderBy('stock')->get();
        
        return view('main.manager.index',[
            'reports' => Report::get(),
            'stock' => Report::get()->sum('stock'),
            'total' => Report::get()->sum('total'),
            'count' => Goods::get()->sum('stock'),
            'goods' => Goods::get()->count(),
            'transactions' => Transaction::get(),
            'goodst' => $data
        ]);
    }
}
