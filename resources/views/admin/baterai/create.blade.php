@extends('admin.template_backend.home')
@section('heading', 'Data Baterai')
@section('page')
  <li class="breadcrumb-item active">Data Baterai</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Baterai</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('bateraiKandang.store') }}" method="POST" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="row">
            <input type="hidden" name="jadwal_id" value="">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama_baterai">Nama Baterai</label>
                <input type='text' id="nama_baterai" name='nama_baterai' class="form-control @error('nama_baterai') is-invalid @enderror" placeholder='nama baterai'>
              </div>
              <div class="form-group">
                <label for="total_ayam">Total Ayam</label>
                <input type='number' id="total_ayam" name='total_ayam' class="form-control @error('total_ayam') is-invalid @enderror" placeholder='total ayam'>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="{{ route('bateraiKandang.index') }}" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
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
    $("#DataBaterai").addClass("active");
  </script>
@endsection