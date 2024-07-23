@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman kendaraan</h1>
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
                    <div class="card-body">
                        <h3>{{ $kendaraan->no_pol }}</h3>
                        <p>{{ $kendaraan->no_mesin }}</p>
                        <p>{{ $kendaraan->merek}}</p>
                        <p>{{ $kendaraan->warna }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
