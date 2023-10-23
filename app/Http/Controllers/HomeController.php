<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\computer;

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
        // Get all online computers
        $computers = computer::where('is_online', true)->get();

        return view('home', compact('computers'));
    }
}
