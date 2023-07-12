<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();

        return view('siswaDashboard.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswaDashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama_siswa' => $request->input('nama_siswa'),
            'alamat_siswa' => $request->input('alamat_siswa'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'agama' => $request->input('agama'),
            'foto_siswa' => $request->input('foto_siswa'),
            'foto_akte_kelahiran' => $request->input('foto_akte_kelahiran'),
            'nama_orang_tua' => $request->input('nama_orang_tua'),
            'alamat_orang_tua' => $request->input('alamat_orang_tua'),
            'no_telp_orang_tua' => $request->input('no_telp_orang_tua'),
        ];

        Siswa::create($data);

        return redirect('/siswa-dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return view('siswaDashboard.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswaDashboard.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            'nama_siswa' => $request->input('nama_siswa'),
            'alamat_siswa' => $request->input('alamat_siswa'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'agama' => $request->input('agama'),
            'foto_siswa' => $request->input('foto_siswa'),
            'foto_akte_kelahiran' => $request->input('foto_akte_kelahiran'),
            'nama_orang_tua' => $request->input('nama_orang_tua'),
            'alamat_orang_tua' => $request->input('alamat_orang_tua'),
            'no_telp_orang_tua' => $request->input('no_telp_orang_tua'),
        ];

        Siswa::where('id', $id)->update($data);

        return redirect('/siswa-dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Siswa::destroy($id);
        return redirect('/siswa-dashboard');
    }
}
