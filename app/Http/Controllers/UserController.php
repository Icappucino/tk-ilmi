<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userList = DB::table('user')->get();
        return view('user.index', compact('userList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengarahkan kehalaman form
        return view('siswa.daftar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Cek apakah username sudah digunakan
    $usernameExists = DB::table('user')->where('username', $request->nama)->exists();

    if ($usernameExists) {
        // Tampilkan sweet alert "username sudah digunakan"
        return redirect()->back()->with('status', 'username_exists');
    }

    // Jika username belum digunakan, proses input data
    DB::table('user')->insert([
        'username' => $request->nama,
        'password' => $request->password,
        'no_telp_orang_tua' => $request->no_telp,
    ]);

    return redirect('/Form-Siswa')->with('status', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // menampilkan details pengarang
        $userList = DB::table('user')
                ->where('id','=',$id)->get();
        return view('user.show', compact('userList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // diarahkan ke halaman edit data
        $data = DB::table('user')
                    ->where('id','=',$id)->get();
        return view('user.form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // proses ubah data
        DB::table('user')->where('id','=',$id)->update(
            [
                'username'=>$request->nama,
                'password'=>$request->password,
                'no_telp_orang_tua'=>$request->no_telp,
            ]
        );
        return redirect('/User'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // menghapus data
        DB::table('siswa')->where('id',$id)->delete();
        return redirect('/Siswa');
    }
}
