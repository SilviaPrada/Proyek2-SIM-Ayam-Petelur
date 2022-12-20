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
        <h3 class="card-title">Edit Data Pencatatan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('pencatatanAyam.update', $pencatatanAyam->id) }}" method="POST" id="myForm" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="row">
            <input type="hidden" name="jadwal_id" value="">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <select id="waktu" name="waktu" class="select2bs4 form-control @error('waktu') is-invalid @enderror">
                        <option value="Pagi">Pagi</option>
                        <option value="Sore">Sore</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="kolom_id">Kolom Id</label>
                  <select id="kolom_id" name="kolom_id" class="form-control @error('kolom_id') is-invalid @enderror select2bs4">
                      <option value=""> Kolom Ayam</option>
                      <option value="01">01</option>
                        <option value="02">02</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="produktifitas">Produktifitas</label>
                    <div class="form-check">
                        <input type='radio' id="produktifitasB" name='produktifitas' class="form-check-input" value="Bertelur">
                        <label for="produktifitasB" class="form-check-label"> Bertelur </label>
                    </div>
                    <div class="form-check">
                        <input type='radio' id="produktifitasTB" name='produktifitas' class="form-check-input" value="Tidak Bertelur">
                        <label for="produktifitasTB" class="form-check-label"> Tidak Bertelur </label>
                    </div>
            </div>
            <div class="form-group">
                <label for="kondisi">Kondisi</label>
                    <div class="form-check">
                        <input type='radio' id="kondisiSH" name='kondisi' class="form-check-input" value="Sehat">
                        <label for="kondisiSH" class="form-check-label"> Sehat </label>
                    </div>
                    <div class="form-check">
                        <input type='radio' id="kondisiSK" name='kondisi' class="form-check-input" value="Sakit">
                        <label for="kondisiSK" class="form-check-label"> Sakit </label>
                    </div>
                    <div class="form-check">
                        <input type='radio' id="kondisiMT" name='kondisi' class="form-check-input" value="Mati">
                        <label for="kondisiMT" class="form-check-label"> Mati </label>
                    </div>
                    <div class="form-check">
                        <input type='radio' id="kondisiAF" name='kondisi' class="form-check-input" value="Afkir">
                        <label for="kondisiAF" class="form-check-label"> Afkir </label>
                    </div>
            </div>
            <div class="form-group">
                <label for="jumlah_telur">Jumlah Telur</label>
                <input type='number' id="jumlah_telur" name='jumlah_telur' class="form-control @error('jumlah_telur') is-invalid @enderror" placeholder='000'>
            </div>
        </div>
      </div>
    </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="{{ route('pencatatanAyam.index') }}" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
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
    $("#DataPencatatan").addClass("active");
  </script>
@endsection