@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Tambah Supplier</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('admin.supplier.store') }}" method="POST"  >
                      @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Supplier</label>
                            <input type="text" name="nama_supplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama supplier">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            @error('nama_supplier')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Alamat</label>
                          <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter alamat">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          @error('alamat')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">No HP</label>
                          <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Enter No HP">
                          @error('no_hp')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">ID Barang</label>
                            <select class="form-control" name="id_barang" id="exampleFormControlSelect1">
                                @foreach ($barang as $databarang)
                                <option value="{{ $databarang->id_barang }}">{{ $databarang->id_barang }}</option>
                                @endforeach
                             </select>
                             @error('id_barang')
                             <div class="alert alert-danger mt-2">
                                 {{ $message }}
                             </div>
                             @enderror
                          </div>
                          <br/>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                      </form>
       
                    
                    {{-- {{ $user->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
