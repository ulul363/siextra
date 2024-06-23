<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;
use App\Models\JadwalEkstrakurikuler;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class JadwalEkstrakurikulerController extends Controller
{
    public function index()
    {
        $jadwalekstrakurikulers = JadwalEkstrakurikuler::with('ekstrakurikuler')->get();
        return view('jadwalekstrakurikuler.index', compact('jadwalekstrakurikulers'));
    }

    public function create()
    {
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('jadwalekstrakurikuler.create', compact('ekstrakurikulers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required|string|max:255',
            'waktu' => 'required',
            'lokasi' => 'required|string|max:255',
            'id_ekstrakurikuler' => 'required|exists:ekstrakurikuler,id_ekstrakurikuler',
            'status' => 'required|in:aktif,tidak aktif', // validasi status harus salah satu dari ini
        ]);

        JadwalEkstrakurikuler::create($request->all());

        return redirect()->route('jadwalekstrakurikuler.index')
            ->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jadwalEkstrakurikuler = JadwalEkstrakurikuler::findOrFail($id);
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('jadwalekstrakurikuler.edit', compact('jadwalEkstrakurikuler', 'ekstrakurikulers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hari' => 'required|string|max:255',
            'waktu' => 'required',
            'lokasi' => 'required|string|max:255',
            'id_ekstrakurikuler' => 'required|exists:ekstrakurikuler,id_ekstrakurikuler',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        $jadwalEkstrakurikuler = JadwalEkstrakurikuler::findOrFail($id);
        $jadwalEkstrakurikuler->update($request->all());

        return redirect()->route('jadwalekstrakurikuler.index')
            ->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function show($id)
    {
        $jadwalEkstrakurikuler = JadwalEkstrakurikuler::findOrFail($id);
        return view('jadwalekstrakurikuler.show', compact('jadwalEkstrakurikuler'));

        try {
            $jadwalEkstrakurikuler = JadwalEkstrakurikuler::findOrFail($id);
            return view('jadwalekstrakurikuler.show', compact('jadwalEkstrakurikuler'));
        } catch (ModelNotFoundException $e) {
            // Handle jika tidak menemukan data
            return redirect()->route('jadwalekstrakurikuler.index')->with('error', 'Jadwal tidak ditemukan.');
        }
    }


    public function destroy($id)
    {
        $jadwalEkstrakurikuler = JadwalEkstrakurikuler::findOrFail($id);
        $jadwalEkstrakurikuler->delete();

        return redirect()->route('jadwalekstrakurikuler.index')
            ->with('success', 'Jadwal berhasil dihapus.');
    }
}
