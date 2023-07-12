<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mataPelajarans = MataPelajaran::all();

        return view('mataPelajaranDashboard.index', compact('mataPelajarans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mataPelajaranDashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'mata_pelajaran' => $request->input('mata_pelajaran'),
            'kelas' => $request->input('kelas'),
        ];

        MataPelajaran::create($data);

        return redirect('/mata-pelajaran-dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mataPelajaran = MataPelajaran::find($id);
        return view('mataPelajaranDashboard.show', compact('mataPelajaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mataPelajaran = MataPelajaran::find($id);
        return view('mataPelajaranDashboard.edit', compact('mataPelajaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            'mata_pelajaran' => $request->input('mata_pelajaran'),
            'kelas' => $request->input('kelas'),
        ];

        MataPelajaran::where('id', $id)->update($data);

        return redirect('/mata-pelajaran-dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MataPelajaran::destroy($id);
        return redirect('/mata-pelajaran-dashboard');
    }
}
