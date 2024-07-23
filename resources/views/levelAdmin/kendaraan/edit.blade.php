@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Edit Customer</h1>
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
                    <form action="{{ route('admin.kendaraan.update', $kendaraan->no_pol) }}" method="POST" >
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <label for="exampleInputEmail1">No Pol</label>
                        <input type="text" name="no_pol" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter no pol" value="{{ old('item', $kendaraan->no_pol) }}">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        @error('no_pol')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">No Mesin</label>
                          <input type="text" name="no_mesin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter no mesin" value="{{ old('item', $kendaraan->no_mesin) }}">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          @error('no_mesin')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Merek</label>
                            <select class="form-control" name="merek" id="exampleFormControlSelect1">
                                <option value="{{ old('item', $kendaraan->merek) }}">{{ old('item', $kendaraan->merek) }}</option>
                                <option value="honda">Honda</option>
                                <option value="yamaha">Yamaha</option>
                                <option value="suzuki">Suzuki</option>
                                <option value="kawasaki">Kawasaki</option>
                                <option value="lain">Lain</option>
                             </select>
                             @error('merek')
                             <div class="alert alert-danger mt-2">
                                 {{ $message }}
                             </div>
                             @enderror
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Warna</label>
                            <select class="form-control" name="warna" id="exampleFormControlSelect1">
                                <option value="{{ old('item', $kendaraan->warna) }}">{{ old('item', $kendaraan->warna) }}</option>
                                <option value="Putih">Putih</option>
                                <option value="Hitam">Hitam</option>
                                <option value="Hijau">Hijau</option>
                                <option value="Biru">Biru</option>
                                <option value="Merah">Merah</option>
                                <option value="Lain">Lain</option>
                             </select>
                             @error('warna')
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
