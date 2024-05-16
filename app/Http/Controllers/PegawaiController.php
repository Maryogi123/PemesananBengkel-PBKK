<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //
    public function index(): View
    {
        $pegawai = Pegawai::latest()->paginate(10);
        return view('pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:150',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawaiBengkel.index')
            ->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $pegawai = Pegawai::findOrFail($id);

        return view('pegawai.show', compact('pegawai'));
    }

    public function edit(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);

        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:150',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());

        return redirect()->route('pegawaiBengkel.index')
            ->with('success', 'Data pegawai berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('pegawaiBengkel.index')->with(['success' => 'Data Pegawai Berhasil Dihapus!']);
    }
}
