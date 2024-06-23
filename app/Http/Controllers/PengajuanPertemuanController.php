<?php

namespace App\Http\Controllers;

use App\Models\PengajuanPertemuan;
use Illuminate\Http\Request;

class PengajuanPertemuanController extends Controller
{
    public function index()
    {
        $pengajuanPertemuans = PengajuanPertemuan::with(['siswa', 'pembina'])->get();
        return view('pengajuan_pertemuan.index', compact('pengajuanPertemuans'));
    }

    public function create()
    {
        return view('pengajuan_pertemuan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|exists:siswa,nis',
            'nip_pembina' => 'required|exists:pembina,nip_pembina',
            'tanggal_pengajuan' => 'required|date',
            'status' => 'required|in:Menunggu,Disetujui,Ditolak',
        ]);

        PengajuanPertemuan::create($request->all());

        return redirect()->route('pengajuanpertemuan.index')->with('success', 'Pengajuan pertemuan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pengajuanPertemuan = PengajuanPertemuan::with(['siswa', 'pembina'])->findOrFail($id);
        return view('pengajuan_pertemuan.show', compact('pengajuanPertemuan'));
    }

    public function edit($id)
    {
        $pengajuanPertemuan = PengajuanPertemuan::findOrFail($id);
        return view('pengajuan_pertemuan.edit', compact('pengajuanPertemuan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required|exists:siswa,nis',
            'nip_pembina' => 'required|exists:pembina,nip_pembina',
            'tanggal_pengajuan' => 'required|date',
            'status' => 'required|in:Menunggu,Disetujui,Ditolak',
        ]);

        $pengajuanPertemuan = PengajuanPertemuan::findOrFail($id);
        $pengajuanPertemuan->update($request->all());

        return redirect()->route('pengajuanpertemuan.index')->with('success', 'Pengajuan pertemuan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengajuanPertemuan = PengajuanPertemuan::findOrFail($id);
        $pengajuanPertemuan->delete();

        return redirect()->route('pengajuanpertemuan.index')->with('success', 'Pengajuan pertemuan berhasil dihapus.');
    }
}
