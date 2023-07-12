<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();

        return view('adminDashboard.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminDashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama_admin' => $request->input('nama_admin'),
            'no_telp_admin' => $request->input('no_telp_admin'),
            'alamat_admin' => $request->input('alamat_admin'),
            'foto_admin' => $request->input('foto_admin'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
        ];

        Admin::create($data);

        return redirect('/admin-dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $admin = Admin::find($id);
        return view('adminDashboard.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('adminDashboard.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            'nama_admin' => $request->input('nama_admin'),
            'no_telp_admin' => $request->input('no_telp_admin'),
            'alamat_admin' => $request->input('alamat_admin'),
            'foto_admin' => $request->input('foto_admin'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
        ];

        Admin::where('id', $id)->update($data);

        return redirect('/admin-dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect('/admin-dashboard');
    }
}
