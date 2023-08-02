<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriList = DB::table('kategori')->get();
        return view('kategori.index', compact('kategoriList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengarahkan kehalaman form
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Proses input data
                DB::table('katagori')->insert(
                    [
                        'jenis_transaksi'=>$request->jenis_pembayaran,
                    ]
                );
                return redirect('/Kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // menampilkan details pengarang
        $kategoriList = DB::table('kategori')
                ->where('id','=',$id)->get();
        return view('kategori.show', compact('kategoriList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // diarahkan ke halaman edit data
        $data = DB::table('katagori')
                ->where('id','=',$id)->get();
        return view('kategori.form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
                // proses ubah data
                DB::table('kategori')->where('id','=',$id)->update(
                    [
                        'jenis_transaksi'=>$request->jenis_pembayaran,
                    ]
                );
                return redirect('/Kategori'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // menghapus data
        DB::table('kategori')->where('id',$id)->delete();
        return redirect('/Kategori');
    }
}
