<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adminList = DB::table('admin')->get();
        return view('admin.index', compact('adminList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengarahkan kehalaman form
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Proses input data
        DB::table('admin')->insert(
            [
                'nama_admin'=>$request->nama,
                'no_telp_admin'=>$request->no_hp,
                'alamat_admin'=>$request->alamat,
                'foto_admin'=>$request->foto,
                'username'=>$request->username,
                'password'=>$request->password,
                'email'=>$request->email,
            ]
        );
        return redirect('/Admin');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    // menampilkan details pengarang
    $adminList = DB::table('admin')
                ->where('id','=',$id)->get();
    return view('admin.show', compact('adminList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // diarahkan ke halaman edit data
        $data = DB::table('admin')
        ->where('id','=',$id)->get();
        return view('admin.form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // proses ubah data
        DB::table('admin')->where('id','=',$id)->update(
            [
                'nama_admin'=>$request->nama,
                'no_telp_admin'=>$request->no_hp,
                'alamat_admin'=>$request->alamat,
                'foto_admin'=>$request->foto,
                'username'=>$request->username,
                'password'=>$request->password,
                'email'=>$request->email,
            ]
        );
        return redirect('/Admin'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // menghapus data
        DB::table('admin')->where('id',$id)->delete();
        return redirect('/Admin');
    }
}
