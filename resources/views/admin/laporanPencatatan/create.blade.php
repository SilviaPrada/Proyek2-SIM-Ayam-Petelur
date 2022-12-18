@extends('admin.template_backend.home')
@section('heading', 'Data Pencatatan')
@section('page')
  <li class="breadcrumb-item active">Data Pencatatan</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Pencatatan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('pencatatanAyam.store') }}" method="POST" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <input type='text' id="waktu" name='waktu' class="form-control @error('waktu') is-invalid @enderror" placeholder='pagi/sore'>
                </div>
            </div>
            <div class="form-group">
                <label for="kolom_id">Kolom</label>
                <input type='text' id="kolom_id" name='kolom_id' class="form-control @error('kolom_id') is-invalid @enderror" placeholder='kolom 00'>
            </div>
            <div class="form-group">
                    <label for="produktifitas">Produktivitas</label>
                    <input type='text' id="produktifitas" name='produktifitas' class="form-control @error('produktifitas') is-invalid @enderror" placeholder='bertelur/tidak bertelur'>
            </div>
            <div class="form-group">
                    <label for="kondisi">Kondisi</label>
                    <input type='text' id="kondisi" name='kondisi' class="form-control @error('kondisi') is-invalid @enderror" placeholder='sehat/sakit/mati/afkir'>
            </div>
            <div class="form-group">
                <label for="jumlah_telur">Jumlah Telur</label>
                <input type='number' id="jumlah_telur" name='jumlah_telur' class="form-control @error('jumlah_telur') is-invalid @enderror" placeholder='000'>
              </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="#" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
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
    $("#DataPencatatan").addClass("active");
  </script>
@endsection