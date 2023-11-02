<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = kendaraan::all();
        return view('kendaraan.daftar', compact('vehicles'));
    }

    public function add()
    {
        return view('kendaraan.tambah');
    }

    public function store(Request $request)
    {
        // Validasi data masukan (opsional)
        $validatedData = $request->validate([
            // 'id' => 'required|integer',
            'name' => 'required|string',
            'typeId' => 'required|integer',
            'license' => 'required|string',
            'dailyprice' => 'required|integer',
            'status' => 'required|boolean',
        ]);

        // Simpan data kendaraan ke database
        kendaraan::create([
            // 'id' => $request->id,
            'name' => $request->name,
            'typeId' => $request->typeId,
            'license' => $request->license,
            'dailyprice' => $request->dailyprice,
            'status' => $request->status,
        ]);

        return redirect()->route('kendaraan')->with('success', 'Kendaraan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kendaraan $kendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kendaraan $kendaraan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kendaraan $kendaraan)
    {
        //
    }
}
