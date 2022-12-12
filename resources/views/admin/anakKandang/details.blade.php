@extends('template_backend.home')
@section('heading', 'Details Siswa')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('#') }}">Anak Kandang</a></li>
  <li class="breadcrumb-item active">Details Anak Kandang</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('#') }}" class="btn btn-default btn-sm"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
        </div>
        <div class="card-body">
            <div class="row no-gutters ml-2 mb-2 mr-2">
                <div class="col-md-4">
                    <!-- <img src="{{ asset($siswa->foto) }}" class="card-img img-details" alt="..."> -->
                </div>
                <div class="col-md-1 mb-4"></div>
                <div class="col-md-7">
                    <h5 class="card-title card-text mb-2">Nama : </h5>
                    <h5 class="card-title card-text mb-2">No. KTP : </h5>
                    <h5 class="card-title card-text mb-2">No. ID : </h5>
                    <h5 class="card-title card-text mb-2">Baterai : </h5>
                    <!-- @if ($siswa->jk == 'L') -->
                        <h5 class="card-title card-text mb-2">Jenis Kelamin : Laki-laki</h5>
                    <!-- @else -->
                        <h5 class="card-title card-text mb-2">Jenis Kelamin : Perempuan</h5>
                    <!-- @endif -->
                    <h5 class="card-title card-text mb-2">Tempat Lahir : </h5>
                    <h5 class="card-title card-text mb-2">Tanggal Lahir : </h5>
                    <h5 class="card-title card-text mb-2">No. Telepon : </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataSiswa").addClass("active");
    </script>
@endsection