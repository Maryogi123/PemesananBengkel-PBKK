@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman Barang</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('admin.barang.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Merek</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Satuan</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($barang as $index => $data)
                                <tr>
                                    <td class="text-center">
                                        {{ ++$index }}
                                    </td>
                                    <td>{{ $data->nama_barang }}</td>
                                    <td>{{ $data->merek }}</td>
                                    <td>{{ $data->harga }}</td>
                                    <td>{{ $data->stok }}</td>
                                    <td>{{ $data->satuan }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.barang.destroy', $data->id_barang) }}" method="POST">
                                            <a href="{{ route('admin.barang.show', $data->id_barang) }}" class="btn btn-sm btn-warning">SHOW</a>
                                            <a href="{{ route('admin.barang.edit', $data->id_barang) }}" class="btn btn-sm btn-warning">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Barang Belum Ada.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- {{ $user->links() }} --}}
                </div>
            </div>
            <div class="d-flex flex-row justify-content-sm-around py-3">
                {{-- <a href="{{ route('Customer.index') }}" class="btn btn-light btn-outline-primary">Data Customer</a>
                <a href="{{ route('Pegawai.index') }}" class="btn btn-light btn-outline-primary">Data Pegawai</a>
                <a href="{{ route('Pengguna.index') }}" class="btn btn-light btn-outline-primary">Data Pengguna</a>
                <a href="{{ route('barang.index') }}" class="btn btn-primary">Data Barang</a>
                <a href="{{ route('Komputer.index') }}" class="btn btn-light btn-outline-primary">Data Komputer</a>
                <a href="{{ route('Supplier.index') }}" class="btn btn-light btn-outline-primary">Data Supplier</a>
                <a href="{{ route('Keluhan.index') }}" class="btn btn-light btn-outline-primary">Data Keluhan</a> --}}
            </div>
        </div>
    </div>
</div>


@endsection