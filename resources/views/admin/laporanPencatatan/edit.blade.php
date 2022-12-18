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
                    <label for="waktu_id">Waktu</label>
                    <select id="waktu_id" name="waktu_id" class="form-control @error('waktu_id') is-invalid @enderror select2bs4">
                        <option value="">-- Pilih Waktu --</option>
                        <option value="2"
                            @if ($waktu->waktu_id == '2')
                                selected
                            @endif
                        >Semua</option>
                        @foreach ($waktu as $data)
                        <option value="{{ $data->id }}"
                            @if ($waktu->waktu_id == $data->id)
                                selected
                            @endif
                        >{{ $data->ket }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="kolom_id">Kolom</label>
                <select id="kolom_id" name="kolom_id" class="form-control @error('kolom_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Kolom --</option>
                    <option value="2"
                        @if ($kolom->kolom_id == '2')
                            selected
                        @endif
                    >Semua</option>
                    @foreach ($kolom as $data)
                    <option value="{{ $data->id }}"
                        @if ($kolom->kolom_id == $data->id)
                            selected
                        @endif
                    >{{ $data->ket }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="produktifitas">produktifitas</label>
                <input type='text' value="{{ $pencatatanAyam->produktifitas }}" id="produktifitas" name='produktifitas' class="form-control @error('produktifitas') is-invalid @enderror" placeholder='produktifitas'>
              </div>
            </div>
            <div class="form-group">
                <label for="kondisi">Kondisi</label>
                <input type='text' value="{{ $pencatatanAyam->kondisi }}" id="kondisi" name='produktifitas' class="form-control @error('produktifitas') is-invalid @enderror" placeholder='kondisi'>
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
    $("#DataKelas").addClass("active");
  </script>
@endsection