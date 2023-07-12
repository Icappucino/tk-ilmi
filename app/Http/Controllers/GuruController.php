<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = Guru::all();

        return view('guruDashboard.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guruDashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama_guru' => $request->input('nama_guru'),
            'no_telp_guru' => $request->input('no_telp_guru'),
            'alamat_guru' => $request->input('alamat_guru'),
            'foto_guru' => $request->input('foto_guru'),
        ];

        Guru::create($data);

        return redirect('/guru-dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $guru = Guru::find($id);
        return view('guruDashboard.show', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $guru = Guru::find($id);
        return view('guruDashboard.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            'nama_guru' => $request->input('nama_guru'),
            'no_telp_guru' => $request->input('no_telp_guru'),
            'alamat_guru' => $request->input('alamat_guru'),
            'foto_guru' => $request->input('foto_guru'),
        ];

        Guru::where('id', $id)->update($data);

        return redirect('/guru-dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Guru::destroy($id);
        return redirect('/guru-dashboard');
    }
}
