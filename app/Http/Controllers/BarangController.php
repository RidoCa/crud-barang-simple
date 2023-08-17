<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data Barang';
        $data['q'] = $request->q;
        $data['rows'] = Barang::where('nama_barang', 'like', '%' . $request->q . '%')->get();
        return view('barang.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah Barang';
        return view('barang.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kode_barang' => 'required|unique:tb_barang',
        ]);

        $user = new Barang();
        $user->nama_barang = $request->nama_barang;
        $user->kode_barang = $request->kode_barang;
        $user->save();
        return redirect('barang')->with('success', 'Tambah Barang Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        $data['title'] = 'Ubah barang';
        $data['row'] = $barang;
        return view('barang.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kode_barang' => 'required',
        ]);

        $barang->nama_barang = $request->nama_barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->save();
        return redirect('barang')->with('success', 'Ubah Barang Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect('barang')->with('success', 'Hapus Data Berhasil');
    }
}
