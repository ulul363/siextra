<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\ProgramKegiatan;
use Illuminate\Http\Request;

class ProgramKegiatanController extends Controller
{
    public function index()
    {
        $programkegiatans = ProgramKegiatan::with('ekstrakurikuler')->get();
        return view('programkegiatan.index', compact('programkegiatans'));
    }

    public function create()
    {
        $ekstrakurikulers = Ekstrakurikuler::all();
        $tahunAjaranOptions = $this->getTahunAjaranOptions(); // Ambil opsi tahun ajaran
        return view('programkegiatan.create', compact('ekstrakurikulers', 'tahunAjaranOptions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_program' => 'required|max:255',
            'deskripsi' => 'required',
            'tahun_ajaran' => 'required',
            'id_ekstrakurikuler' => 'required|exists:ekstrakurikuler,id_ekstrakurikuler'
        ]);

        ProgramKegiatan::create($request->all());

        return redirect()->route('programkegiatan.index')->with('success', 'Program Kegiatan berhasil ditambahkan.');
    }

    private function getTahunAjaranOptions()
    {
        $startYear = 2024;
        $endYear = date('Y') + 5; // Ambil tahun sekarang ditambah 5 tahun ke depan
        $tahunAjaranOptions = [];

        for ($year = $startYear; $year <= $endYear; $year++) {
            $tahunAjaranOptions["$year/" . ($year + 1)] = "$year/" . ($year + 1);
        }

        return $tahunAjaranOptions;
    }

    public function show($id)
    {
        $programKegiatan = ProgramKegiatan::with('ekstrakurikuler')->findOrFail($id);
        return view('programkegiatan.show', compact('programKegiatan'));
    }

    public function edit($id)
    {
        $programKegiatan = ProgramKegiatan::findOrFail($id);
        $ekstrakurikulers = Ekstrakurikuler::all();
        $tahunAjaranOptions = $this->getTahunAjaranOptions(); // Ambil opsi tahun ajaran
        return view('programkegiatan.edit', compact('programKegiatan', 'ekstrakurikulers', 'tahunAjaranOptions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_program' => 'required|max:255',
            'deskripsi' => 'required',
            'tahun_ajaran' => 'required',
            'id_ekstrakurikuler' => 'required|exists:ekstrakurikuler,id_ekstrakurikuler'
        ]);

        $programKegiatan = ProgramKegiatan::findOrFail($id);
        $programKegiatan->update($request->all());

        return redirect()->route('programkegiatan.index')->with('success', 'Program Kegiatan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $programKegiatan = ProgramKegiatan::findOrFail($id);
        $programKegiatan->delete();

        return redirect()->route('programkegiatan.index')->with('success', 'Program Kegiatan berhasil dihapus.');
    }
}
