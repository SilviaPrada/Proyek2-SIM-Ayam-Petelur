@extends('admin.template_backend.home')
@section('heading', 'Edit Informasi')
@section('page')
  <li class="breadcrumb-item active"><a href="#">Informasi</a></li>
  <li class="breadcrumb-item active">Edit Informasi</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Informasi</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="#" method="post">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="infromasi_id" value="#">
                <div class="form-group">
                  <label for="nama_penyakit">Nama Penyakit</label>
                  <input type="text" id="nama_penyakit" name="nama_penyakit" value="#" class="form-control @error('nama_penyakit') is-invalid @enderror" placeholder="{{ __('Nama Penyakit') }}">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" id="keterangan" name="keterangan" value="#" class="form-control @error('keterangan') is-invalid @enderror" placeholder="{{ __('Keterangan') }}">
                </div>
                <div class="form-group">
                  <label for="gejala">Gejala</label>
                  <input type="text" id="gejala" name="gejala" value="#" class="form-control @error('gejala') is-invalid @enderror" placeholder="{{ __('Gejala') }}">
                </div>
                <div class="form-group">
                  <label for="pengobatan">Pengobatan</label>
                  <input type="text" id="pengobatan" name="pengobatan" value="#" class="form-control @error('pengobatan') is-invalid @enderror" placeholder="{{ __('Cara Mengobati') }}">
                </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="#" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#back').click(function() {
        window.location="#";
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataInformasi").addClass("active");
</script>
@endsection