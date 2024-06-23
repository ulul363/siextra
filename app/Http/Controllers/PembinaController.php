<?php

namespace App\Http\Controllers;

use App\Models\Pembina;
use Illuminate\Http\Request;

class PembinaController extends Controller
{
    public function index()
    {
        $pembinas = Pembina::all();
        return view('pembina.index', compact('pembinas'));
    }

    public function create()
    {
        return view('pembina.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip_pembina' => 'required|numeric|unique:pembina,nip_pembina', 
            'nama' => 'required|max:50',
            'alamat' => 'required|max:100',
            'jenis_kelamin' => 'required|in:L,P',
            'email' => 'required|email|max:50',
            'no_hp' => 'required|max:15',
        ]);

        Pembina::create($request->all());

        return redirect()->route('pembina.index')->with('success', 'Pembina berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pembina = Pembina::findOrFail($id);
        return view('pembina.show', compact('pembina'));
    }

    public function edit($nip_pembina)
    {
        $pembina = Pembina::findOrFail($nip_pembina);
        return view('pembina.edit', compact('pembina'));
    }

    public function update(Request $request, $nip_pembina)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'alamat' => 'required|max:100',
            'jenis_kelamin' => 'required|in:L,P',
            'email' => 'required|email|max:50',
            'no_hp' => 'required|max:15',
        ]);

        $pembina = Pembina::findOrFail($nip_pembina);
        $pembina->update($request->all());

        return redirect()->route('pembina.index')->with('success', 'Pembina berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pembina = Pembina::findOrFail($id);
        $pembina->delete();

        return redirect()->route('pembina.index')->with('success', 'Pembina berhasil dihapus.');
    }
}
