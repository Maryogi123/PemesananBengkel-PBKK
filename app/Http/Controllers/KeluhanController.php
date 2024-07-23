<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Keluhan;
use App\Models\Kendaraan;
use App\Models\Pegawai;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    //

    public function index(): View
    {
        $keluhan = Keluhan::latest()->paginate(10);
        return view('levelAdmin.keluhan.index', compact('keluhan'));
    }

    public function create()
    {
        $kendaraan = Kendaraan::all();
        $customer = Customer::all();
        $pegawai = Pegawai::all();
        return view('levelAdmin.keluhan.create', compact('kendaraan', 'customer', 'pegawai'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_keluhan' => 'required',
            'ongkos' => 'required',
            'no_pol' => 'required',
            'customer_id' => 'required',
            'id_pegawai' => 'required',
        ]);

        Keluhan::create($request->all());

        return redirect()->route('admin.keluhan.index')
            ->with('success', 'Keluhan berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $keluhan = Keluhan::findOrFail($id);

        return view('levelAdmin.keluhan.show', compact('keluhan'));
    }
    public function edit(string $id)
    {
        $keluhan = Keluhan::findOrFail($id);
        $kendaraan = Keluhan::all();
        $customer = Customer::all();
        $pegawai = Pegawai::all();
        return view('levelAdmin.keluhan.edit', compact('keluhan', 'kendaraan', 'customer', 'pegawai'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_keluhan' => 'required',
            'ongkos' => 'required',
            'no_pol' => 'required',
            'customer_id' => 'required',
            'id_pegawai' => 'required',
        ]);

        $keluhan = Keluhan::findOrFail($id);
        $keluhan->update($request->all());

        return redirect()->route('admin.keluhan.index')
            ->with('success', 'Data Keluhan berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $keluhan = Keluhan::findOrFail($id);
        $keluhan->delete();
        return redirect()->route('admin.keluhan.index')->with(['success' => 'Data Keluhan Berhasil Dihapus!']);
    }
}
