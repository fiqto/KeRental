<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MobilController extends Controller
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
    public function adminMobil()
    {
        $daftar_mobil = DB::table('daftar_mobil')->get();

        return view('mobil.adminMobil',['daftar_mobil' => $daftar_mobil]);
    }

    public function mobilCari(Request $request)
	{
		$cari = $request->cari;
 
		$daftar_mobil = DB::table('daftar_mobil')
		->where('nama_mobil','like',"%".$cari."%")
		->paginate();
 
		return view('mobil.adminMobil',['daftar_mobil' => $daftar_mobil]);
 
	}

    public function mobilEdit($id)
    {
        $daftar_mobil = DB::table('daftar_mobil')->where('id_mobil',$id)->get();
        
        return view('mobil.editMobil',['daftar_mobil' => $daftar_mobil]);
    
    }

    public function mobilUpdate(Request $request)
    {
        DB::table('daftar_mobil')->where('id_mobil',$request->id_mobil)->update([
            'id_mobil' => $request->id_mobil,
            'nama_mobil' => $request->nama_mobil,
            'harga_mobil' => $request->harga_mobil,
            'status' => $request->status,
        ]);
        
        return redirect('admin/mobil');
    }

    public function mobilTambah()
    {
        return view('mobil.tambahMobil');
    }

    public function mobilStore(Request $request)
    {
        DB::table('daftar_mobil')->insert([
            'nama_mobil' => $request->nama_mobil,
            'harga_mobil' => $request->harga_mobil,
            'status' => $request->status,
        ]);
        
        return redirect('admin/mobil');
    }

    public function mobilHapus($id_mobil)
    {
        DB::table('daftar_mobil')->where('id_mobil',$id_mobil)->delete();
            
        return redirect('admin/mobil');
    }

    public function mobilasc(Request $request)
	{
		$daftar_mobil = DB::table('daftar_mobil')
        ->orderBy('nama_mobil', 'asc')
		->paginate();
 
		return view('mobil.adminMobil',['daftar_mobil' => $daftar_mobil]);
	}

    public function mobildesc(Request $request)
	{
		$daftar_mobil = DB::table('daftar_mobil')
        ->orderBy('nama_mobil', 'desc')
		->paginate();
 
		return view('mobil.adminMobil',['daftar_mobil' => $daftar_mobil]);
	}

    public function hargaasc(Request $request)
	{
		$daftar_mobil = DB::table('daftar_mobil')
        ->orderBy('harga_mobil', 'desc')
		->paginate();
 
		return view('mobil.adminMobil',['daftar_mobil' => $daftar_mobil]);
	}

    public function hargadesc(Request $request)
	{
		$daftar_mobil = DB::table('daftar_mobil')
        ->orderBy('harga_mobil', 'asc')
		->paginate();
 
		return view('mobil.adminMobil',['daftar_mobil' => $daftar_mobil]);
	}
}
