<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AkunController extends Controller
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
    public function adminAkun()
    {
        $users = DB::table('users')->get();

        return view('akun.adminAkun',['users' => $users]);
    }

    public function akunCari(Request $request)
	{
		$cari = $request->cari;
 
		$users = DB::table('users')
		->where('name','like',"%".$cari."%")
		->paginate();
 
		return view('akun.adminAkun',['users' => $users]);
 
	}

    public function akunEdit($id)
    {
        $users = DB::table('users')->where('id',$id)->get();
        
        return view('akun.editAkun',['users' => $users]);
    
    }

    public function akunUpdate(Request $request)
    {
        DB::table('users')->where('id',$request->id)->update([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => $request->is_admin,
        ]);
        
        return redirect('admin/akun');  
    }

    public function akunHapus($id)
    {
        DB::table('users')->where('id',$id)->delete();
            
        return redirect('admin/akun');
    }

    public function namaasc(Request $request)
	{
		$users = DB::table('users')
        ->orderBy('name', 'asc')
		->paginate();
 
		return view('akun.adminAkun',['users' => $users]);
	}

    public function namadesc(Request $request)
	{
		$users = DB::table('users')
        ->orderBy('name', 'desc')
		->paginate();
 
		return view('akun.adminAkun',['users' => $users]);
	}
}
