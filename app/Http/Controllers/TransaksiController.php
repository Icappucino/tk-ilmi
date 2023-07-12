<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::all();

        return view('transaksiDashboard.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('transaksiDashboard.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'kategori_id' => $request->input('kategori_id'),
            'nominal_transaksi' => $request->input('nominal_transaksi'),
            'tanggal_transaksi' => $request->input('tanggal_transaksi'),
            'waktu_transaksi' => $request->input('waktu_transaksi'),
            'status_pembayaran' => $request->input('status_pembayaran'),
        ];

        Transaksi::create($data);

        return redirect('/transaksi-dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksiDashboard.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        $kategoris = Kategori::all();
        return view('transaksiDashboard.edit', compact('transaksi', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            'kategori_id' => $request->input('kategori_id'),
            'nominal_transaksi' => $request->input('nominal_transaksi'),
            'tanggal_transaksi' => $request->input('tanggal_transaksi'),
            'waktu_transaksi' => $request->input('waktu_transaksi'),
            'status_pembayaran' => $request->input('status_pembayaran'),
        ];

        Transaksi::where('id', $id)->update($data);

        return redirect('/transaksi-dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Transaksi::destroy($id);
        return redirect('/transaksi-dashboard');
    }
}
