<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Pembina;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::with('pembina')->get();
        return view('ekstrakurikuler.index', compact('ekstrakurikulers'));
    }

    public function create()
    {
        $pembinas = Pembina::all();
        $latestId = Ekstrakurikuler::orderBy('id_ekstrakurikuler', 'desc')->first();
        $newId = 'E001';
        if ($latestId) {
            $latestNumber = (int) substr($latestId->id_ekstrakurikuler, 1);
            $newId = 'E' . str_pad($latestNumber + 1, 3, '0', STR_PAD_LEFT);
        }
        return view('ekstrakurikuler.create', compact('pembinas', 'newId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_ekstrakurikuler' => 'required|unique:ekstrakurikuler',
            'nama_ekstrakurikuler' => 'required|string|max:50',
            'nama' => 'required|string|max:50',
            'nip_pembina' => 'required|exists:pembina,nip_pembina',
        ]);

        $pembina = Pembina::where('nama', $request->nama)->first();

        try {
            Ekstrakurikuler::create([
                'id_ekstrakurikuler' => $request->id_ekstrakurikuler,
                'nama_ekstrakurikuler' => $request->nama_ekstrakurikuler,
                'nama' => $pembina->nama,
                'nip_pembina' => $pembina->nip_pembina,
            ]);

            return redirect()->route('ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data ekstrakurikuler.');
        }
    }

    public function show($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::with('pembina')->find($id);
        return view('ekstrakurikuler.show', compact('ekstrakurikuler'));
    }

    public function edit($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::with('pembina')->find($id);
        $pembinas = Pembina::all();
        return view('ekstrakurikuler.edit', compact('ekstrakurikuler', 'pembinas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ekstrakurikuler' => 'required|max:50',
            'nama' => 'required|max:50',
            'nip_pembina' => 'required|exists:pembina,nip_pembina',
        ]);

        $ekstrakurikuler = Ekstrakurikuler::find($id);
        $pembina = Pembina::find($request->nip_pembina);

        $ekstrakurikuler->update([
            'nama_ekstrakurikuler' => $request->nama_ekstrakurikuler,
            'nip_pembina' => $request->nip_pembina,
            'nama' => $pembina->nama,
        ]);

        return redirect()->route('ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::find($id);
        $ekstrakurikuler->delete();

        return redirect()->route('ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil dihapus.');
    }
}
