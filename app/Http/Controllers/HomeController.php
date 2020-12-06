<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report,App\Goods;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main.index',[
            'stock' => Report::sum('stock'),
            'total' => Report::sum('total'),
            'count' => Goods::sum('stock'),
            'goods' => Goods::count()
        ]);
    }
}
