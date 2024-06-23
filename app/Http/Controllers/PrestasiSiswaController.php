<?php

namespace App\Http\Controllers;

use App\Models\PrestasiSiswa; // Ensure correct namespace and class name here
use App\Models\Siswa;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiSiswaController extends Controller
{
    public function index()
    {
        $prestasiSiswas = PrestasiSiswa::with(['siswa', 'ekstrakurikuler'])->get();
        return view('prestasisiswa.index', compact('prestasiSiswas'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('prestasisiswa.create', compact('siswas', 'ekstrakurikulers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|exists:siswa,nis',
            'id_ekstrakurikuler' => 'required|exists:ekstrakurikuler,id_ekstrakurikuler',
            'deskripsi' => 'required|string',
            'tahun_ajaran' => 'required|string|max:9',
            'berkas' => 'required|file|mimes:pdf|max:2048',
        ]);

        $path = $request->file('berkas')->store('berkas', 'public');

        PrestasiSiswa::create([
            'nis' => $request->nis,
            'id_ekstrakurikuler' => $request->id_ekstrakurikuler,
            'deskripsi' => $request->deskripsi,
            'tahun_ajaran' => $request->tahun_ajaran,
            'berkas' => $path
        ]);

        return redirect()->route('prestasisiswa.index')->with('success', 'Prestasi siswa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $prestasiSiswa = PrestasiSiswa::with(['siswa', 'ekstrakurikuler'])->findOrFail($id);
        return view('prestasisiswa.show', compact('prestasiSiswa'));
    }

    public function edit($id)
    {
        $prestasiSiswa = PrestasiSiswa::findOrFail($id);
        $siswas = Siswa::all();
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('prestasisiswa.edit', compact('prestasiSiswa', 'siswas', 'ekstrakurikulers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required|exists:siswa,nis',
            'id_ekstrakurikuler' => 'required|exists:ekstrakurikuler,id_ekstrakurikuler',
            'deskripsi' => 'required|string',
            'tahun_ajaran' => 'required|string|max:9',
            'berkas' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $prestasiSiswa = PrestasiSiswa::findOrFail($id);

        if ($request->hasFile('berkas')) {
            // Hapus file lama
            if ($prestasiSiswa->berkas) {
                Storage::disk('public')->delete($prestasiSiswa->berkas);
            }
            $path = $request->file('berkas')->store('berkas', 'public');
            $prestasiSiswa->update([
                'nis' => $request->nis,
                'id_ekstrakurikuler' => $request->id_ekstrakurikuler,
                'deskripsi' => $request->deskripsi,
                'tahun_ajaran' => $request->tahun_ajaran,
                'berkas' => $path
            ]);
        } else {
            $prestasiSiswa->update([
                'nis' => $request->nis,
                'id_ekstrakurikuler' => $request->id_ekstrakurikuler,
                'deskripsi' => $request->deskripsi,
                'tahun_ajaran' => $request->tahun_ajaran,
            ]);
        }

        return redirect()->route('prestasisiswa.index')->with('success', 'Prestasi siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $prestasiSiswa = PrestasiSiswa::findOrFail($id);

        // Hapus file
        if ($prestasiSiswa->berkas) {
            Storage::disk('public')->delete($prestasiSiswa->berkas);
        }

        $prestasiSiswa->delete();

        return redirect()->route('prestasisiswa.index')->with('success', 'Prestasi siswa berhasil dihapus.');
    }
}
