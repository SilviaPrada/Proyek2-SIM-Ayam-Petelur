@extends('admin.template_backend.home')
@section('heading', 'Edit Anak Kandang')
@section('page')
  <li class="breadcrumb-item active">Edit Data Anak Kandang</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Anak Kandang</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('anakKandang.update', $anakKandang->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="row">
            <input type="hidden" name="jadwal_id" value="">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama_anak_kandang">Nama Anak Kandang</label>
                <input type='text' id="nama_anak_kandang" name='nama_anak_kandang' class="form-control @error('nama_anak_kandang') is-invalid @enderror" placeholder="{{ __('Nama Anak Kandang') }}">
              </div>
              <div class="form-group">
                  <label for="no_ktp">No.KTP</label>
                  <input type="text" id="no_ktp" name="no_ktp"  class="form-control @error('no_ktp') is-invalid @enderror" placeholder="{{ __('No.KTP') }}">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select id="jk" name="jk" class="select2bs4 form-control @error('jk') is-invalid @enderror">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="telp">Telepon</label>
                  <input type="text" id="telp" name="telp" class="form-control @error('telp') is-invalid @enderror" placeholder="{{ __('Telepon') }}">
                </div>
                <div class="form-group">
                  <label for="tmp_lahir">Tempat Lahir</label>
                  <input type="text" id="tmp_lahir" name="tmp_lahir" class="form-control @error('tmp_lahir') is-invalid @enderror" placeholder="{{ __('Tempat Lahir') }}">
                </div>
                <div class="form-group">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" placeholder="{{ __('Tanggal Lahir') }}">
                </div>
                <div class="form-group">
                  <label for="baterai_id">Baterai</label>
                  <input type="text" id="baterai_id" name="baterai_id" class="form-control @error('baterai_id') is-invalid @enderror" placeholder="{{ __('Baterai') }}">
                </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="{{ route('anakKandang.index') }}" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Update</button>
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
    $("#DataAnakKandang").addClass("active");
</script>
@endsection