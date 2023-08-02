<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guruList = DB::table('guru')->get();
        return view('pengajar.index', compact('guruList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengarahkan kehalaman form
        return view('pengajar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Proses input data
                DB::table('guru')->insert(
                    [
                        'nama_guru'=>$request->nama_guru,
                        'alamat_guru'=>$request->alamat,
                        'jenis_kelamin'=>$request->no_telp,
                        'foto_guru'=>$request->foto,
                        'no_telp_guru'=>$request->no_telp,
                    ]
                );
                return redirect('/Guru');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    // menampilkan details pengarang
    $guruList = DB::table('guru')
                ->where('id','=',$id)->get();
    return view('pengajar.show', compact('guruList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // diarahkan ke halaman edit data
        $data = DB::table('guru')
        ->where('id','=',$id)->get();
        return view('pengajar.form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // proses ubah data
        DB::table('guru')->where('id','=',$id)->update(
            [
                'nama_guru'=>$request->nama_guru,
                'alamat_guru'=>$request->alamat,
                'jenis_kelamin'=>$request->no_telp,
                'foto_guru'=>$request->foto,
                'no_telp_guru'=>$request->no_telp,
            ]
        );
        return redirect('/Guru'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // menghapus data
        DB::table('guru')->where('id',$id)->delete();
        return redirect('/Guru');
    }
}
