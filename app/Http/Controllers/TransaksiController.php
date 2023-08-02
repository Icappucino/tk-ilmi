<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use DB;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksiList = DB::table('transaksi')
        ->join('siswa', 'siswa.id_siswa', '=', 'transaksi.id_siswa')
        ->join('kategori', 'kategori.id_kategori', '=', 'transaksi.id_kategori') // Tambahkan alias pada tabel kategori
        ->select('transaksi.*', 'siswa.nama_siswa AS sw', 'kategori.jenis_transaksi AS jt')
        ->get();

    return view('transaksi.index', compact('transaksiList'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengarahkan kehalaman form
        return view('transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required', // Pastikan 'siswa_id' tidak boleh kosong (null)
            'resi' => 'image|mimes:png,jpg|max:5120',
        ]);

        // Proses input foto
        if ($request->hasFile('resi')) {
            $fileResi = $request->nama . '.' . $request->file('resi')->getClientOriginalExtension();
            $request->file('resi')->move(public_path('img'), $fileResi);
        } else {
            $fileResi = '';
        }

        // Proses input data
        DB::table('transaksi')->insert([
            'id_siswa' => $request->siswa_id,
            'id_kategori' => $request->kategori_id,
            'nominal_transaksi' => $request->nominal,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'waktu_transaksi' => $request->waktu_transaksi,
            'bukti_pembayaran' => $fileResi,
            'status_pembayaran' => $request->status,
        ]);

        return redirect('/Transaksi');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaksiList = DB::table('transaksi')
                    ->where('id','=',$id)->get();
        return view('transaksi.show', compact('transaksiList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // diarahkan ke halaman edit data
        $data = DB::table('transaksi')
        ->where('id','=',$id)->get();
        return view('transaksi.form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // proses ubah data
        DB::table('transaksi')->where('id','=',$id)->update(
            [
                'id_siswa'=>$request->siswa_id,
                'kategori_id'=>$request->kategori_id,
                'nominal_transaksi'=>$request->nominal,
                'tanggal_transaksi'=>$request->tanggal_transaksi,
                'waktu_transaksi'=>$request->waktu_transaksi,
                'bukti_pembayaran'=>$request->resi,
                'status_pembayaran'=>$request->status,
            ]
        );
        return redirect('/Transaksi'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // menghapus data
        DB::table('transaksi')->where('id',$id)->delete();
        return redirect('/Transaksi');
    }
}
