@extends('admin.template_backend.home')
@section('heading', 'informasi')
@section('page')
  <li class="breadcrumb-item active">Informasi</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Informasi</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('informasiTernak.store') }}" method="POST" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="row">
            <input type="hidden" name="jadwal_id" value="">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama_penyakit">Nama Penyakit</label>
                <input type='text' id="nama_penyakit" name='nama_penyakit' class="form-control @error('nama_penyakit') is-invalid @enderror" placeholder="{{ __('Nama Penyakit') }}">
              </div>
              <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="textarea" id="keterangan" name="keterangan"  class="form-control @error('keterangan') is-invalid @enderror" placeholder="{{ __('Keterangan') }}">
                </div>
                <div class="form-group">
                  <label for="gejala">Gejala</label>
                  <input type="textarea" id="gejala" name="gejala" class="form-control @error('gejala') is-invalid @enderror" placeholder="{{ __('Gejala') }}">
                </div>
                <div class="form-group">
                  <label for="pengobatan">Pengobatan</label>
                  <input type="textarea" id="pengobatan" name="pengobatan" class="form-control @error('pengobatan') is-invalid @enderror" placeholder="{{ __('Cara Mengobati') }}">
                </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="{{ route('informasiTernak.index') }}" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
</div>
@endsection
@section('script')
  <script>
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#Informasi").addClass("active");
  </script>
@endsection