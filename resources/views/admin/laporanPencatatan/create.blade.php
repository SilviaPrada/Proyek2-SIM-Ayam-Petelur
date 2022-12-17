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
                    <select id="waktu" name="waktu" class="select2bs4 form-control @error('waktu') is-invalid @enderror">
                        <option value="">-- Pilih Waktu --</option>
                        <option value="Pagi"
                            @if ($pencatatanAyam->waktu == 'Pagi')
                                selected
                            @endif
                        >Pagi</option>
                        <option value="Sore"
                            @if ($pencatatanAyam->waktu == 'Sore')
                                selected
                            @endif
                        >Sore</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="kolom_id">Kolom</label>
                <select id="kolom_id" name="kolom_id" class="form-control @error('kolom_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Kolom --</option>
                </select>
            </div>
            <div class="form-group">
                    <label for="produktivitas">Produktivitas</label>
                    <select id="produktivitas" name="produktivitas" class="select2bs4 form-control @error('produktivitas') is-invalid @enderror">
                        <option value="">-- Pilih Produktivitas --</option>
                        <option value="Bertelur"
                            @if ($pencatatanAyam->produktivitas == 'Bertelur')
                                selected
                            @endif
                        >Bertelur</option>
                        <option value="Tidak Bertelur"
                            @if ($pencatatanAyam->produktivitas == 'Tidak Bertelur')
                                selected
                            @endif
                        >Tidak Bertelur</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                    <label for="kondisi">Kondisi</label>
                    <select id="kondisi" name="kondisi" class="select2bs4 form-control @error('kondisi') is-invalid @enderror">
                        <option value="">-- Pilih Kondisi --</option>
                        <option value="Sehat"
                            @if ($pencatatanAyam->kondisi == 'Sehat')
                                selected
                            @endif
                        >Sehat</option>
                        <option value="Sakit"
                            @if ($pencatatanAyam->kondisi == 'Sakit')
                                selected
                            @endif
                        >Sakit</option>
                        <option value="Mati"
                            @if ($pencatatanAyam->kondisi == 'Mati')
                                selected
                            @endif
                        >Mati</option>
                        <option value="Afkir"
                            @if ($pencatatanAyam->kondisi == 'Afkir')
                                selected
                            @endif
                        >Afkir</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="jumlah_telur">Jumlah Telur</label>
                <input type='number' value="{{ $pencatatanAyam->jumlah_telur }}" id="jumlah_telur" name='jumlah_telur' class="form-control @error('jumlah_telur') is-invalid @enderror" placeholder='jumlah telur'>
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