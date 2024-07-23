<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Keluhan;
use App\Models\Pegawai;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index(): View
    {
        $kendaraan = Keluhan::latest()->paginate(10);
        return view('levelAdmin.kendaraan.index', compact('kendaraan'));
    }

    public function create()
    {
        $kendaraan = Keluhan::all();
        $customer = Customer::all();
        $pegawai = Pegawai::all();
        return view('levelAdmin.kendaraan.create', compact('kendaraan', 'customer', 'pegawai'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pol' => 'required',
            'no_mesin' => 'required',
            'merek' => 'required',
            'warna' => 'required',
        ]);

        Keluhan::create($request->all());

        return redirect()->route('admin.kendaraan.index')
            ->with('success', 'kendaraan berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $kendaraan = Keluhan::findOrFail($id);

        return view('levelAdmin.kendaraan.show', compact('kendaraan'));
    }
    public function edit(string $id)
    {
        $kendaraan = Keluhan::findOrFail($id);
        $kendaraan = Keluhan::all();
        $customer = Customer::all();
        $pegawai = Pegawai::all();
        return view('levelAdmin.kendaraan.edit', compact('kendaraan', 'kendaraan', 'customer', 'pegawai'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'no_pol' => 'required',
            'no_mesin' => 'required',
            'merek' => 'required',
            'warna' => 'required',
        ]);

        $kendaraan = Keluhan::findOrFail($id);
        $kendaraan->update($request->all());

        return redirect()->route('admin.kendaraan.index')
            ->with('success', 'Data kendaraan berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $kendaraan = Keluhan::findOrFail($id);
        $kendaraan->delete();
        return redirect()->route('admin.kendaraan.index')->with(['success' => 'Data kendaraan Berhasil Dihapus!']);
    }
}
