<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kehadiran;
use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;
use Illuminate\Support\Facades\Storage;

class KehadiranController extends Controller
{
    public function index()
    {
        $kehadirans = Kehadiran::with('siswa', 'ekstrakurikuler')->get();
        return view('kehadiran.index', compact('kehadirans'));
    }

    public function create()
    {
        $ekstrakurikulers = Ekstrakurikuler::all();
        $siswas = Siswa::all();
        return view('kehadiran.create', compact('ekstrakurikulers', 'siswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|integer|exists:siswa,nis',
            'id_ekstrakurikuler' => 'required|string|exists:ekstrakurikuler,id_ekstrakurikuler',
            'nama_file_upload' => 'nullable|file|mimes:pdf|max:2048',
            'tanggal' => 'required|date',
        ]);

        $fileName = null;
        if ($request->hasFile('nama_file_upload')) {
            $fileName = time() . '.' . $request->nama_file_upload->extension();
            $request->nama_file_upload->move(public_path('uploads'), $fileName);
        }

        Kehadiran::create([
            'nis' => $request->nis,
            'id_ekstrakurikuler' => $request->id_ekstrakurikuler,
            'nama_file' => $fileName,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('kehadiran.index')->with('success', 'Kehadiran berhasil ditambahkan.');
    }

    public function show($id)
    {
        $kehadiran = Kehadiran::with('siswa', 'ekstrakurikuler')->findOrFail($id);
        return view('kehadiran.show', compact('kehadiran'));
    }

    public function edit($id)
    {
        $kehadiran = Kehadiran::findOrFail($id);
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('kehadiran.edit', compact('kehadiran', 'ekstrakurikulers'));
    }

    public function update(Request $request, $id)
    {
        $kehadiran = Kehadiran::findOrFail($id);

        $request->validate([
            'nis' => 'required|integer|exists:siswa,nis',
            'id_ekstrakurikuler' => 'required|string|exists:ekstrakurikuler,id_ekstrakurikuler',
            'nama_file_upload' => 'nullable|file|mimes:pdf|max:2048',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('nama_file_upload')) {
            $fileName = time() . '.' . $request->nama_file_upload->extension();
            $request->nama_file_upload->move(public_path('uploads'), $fileName);
            $kehadiran->nama_file = $fileName;
        }

        $kehadiran->update([
            'nis' => $request->nis,
            'id_ekstrakurikuler' => $request->id_ekstrakurikuler,
            'nama_file' => $kehadiran->nama_file,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('kehadiran.index')->with('success', 'Kehadiran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kehadiran = Kehadiran::findOrFail($id);
        $kehadiran->delete();
        return redirect()->route('kehadiran.index')->with('success', 'Kehadiran berhasil dihapus.');
    }
}