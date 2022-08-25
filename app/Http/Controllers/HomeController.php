<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
    public function home()
    {
        return view('home');
    }
    public function adminHome()
    {
        $daftar_mobil = DB::table('daftar_mobil')
        ->count();

        $users = DB::table('users')
        ->count();

        return view('adminHome',['daftar_mobil' => $daftar_mobil],['users' => $users]);
    }
}
