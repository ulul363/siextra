<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;
use App\Models\PrestasiEkstrakurikuler;
use App\Models\PrestasiSiswa;

class PrestasiEkstrakurikulerController extends Controller
{
    public function index()
    {
        $prestasi = PrestasiEkstrakurikuler::with('ekstrakurikuler')->get();
        return view('prestasiekstrakurikuler.index', compact('prestasi'));
    }

    public function create()
    {
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('prestasiekstrakurikuler.create', compact('ekstrakurikulers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_ekstrakurikuler' => 'required|exists:ekstrakurikuler,id',
            'tahun_ajaran' => 'required|string|max:9',
        ]);

        $prestasiSiswa = PrestasiSiswa::where([
            'nis' => $request->nis,
            'id_ekstrakurikuler' => $request->id_ekstrakurikuler,
            'tahun_ajaran' => $request->tahun_ajaran,
        ])->first();

        if (!$prestasiSiswa) {
            return redirect()->back()->withErrors(['message' => 'Data Prestasi Siswa tidak ditemukan.'])->withInput();
        }

        PrestasiEkstrakurikuler::create([
            'id_ekstrakurikuler' => $request->id_ekstrakurikuler,
            'nama_prestasi' => $prestasiSiswa->nama_prestasi,
            'deskripsi' => $prestasiSiswa->deskripsi,
            'tahun_ajaran' => $request->tahun_ajaran,
        ]);

        return redirect()->route('prestasiekstrakurikuler.index')->with('success', 'Prestasi created successfully.');
    }

    public function edit($id)
    {
        $prestasi = PrestasiEkstrakurikuler::findOrFail($id);
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('prestasiekstrakurikuler.edit', compact('prestasi', 'ekstrakurikulers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_ekstrakurikuler' => 'required|exists:ekstrakurikuler,id',
            'nama_prestasi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tahun_ajaran' => 'required|string|max:9',
        ]);

        $prestasi = PrestasiEkstrakurikuler::findOrFail($id);
        $prestasi->update($request->all());

        return redirect()->route('prestasiekstrakurikuler.index')->with('success', 'Prestasi updated successfully.');
    }

    public function destroy($id)
    {
        $prestasi = PrestasiEkstrakurikuler::findOrFail($id);
        $prestasi->delete();

        return redirect()->route('prestasiekstrakurikuler.index')->with('success', 'Prestasi deleted successfully.');
    }
}
