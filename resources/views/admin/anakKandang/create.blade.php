@extends('admin.template_backend.home')
@section('heading', 'Data Anak Kandang')
@section('page')
  <li class="breadcrumb-item active">Data Anak Kandang</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Anak Kandang</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('anakKandang.store') }}" method="POST" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="row">
            <input type="hidden" name="jadwal_id" value="">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama_anak_kandang">Nama Anak Kandang</label>
                <input type='text' id="nama_anak_kandang" name='nama_anak_kandang' class="form-control @error('nama_anak_kandang') is-invalid @enderror" placeholder='nama anak kandang'>
              </div>
              <div class="form-group">
                <label for="total_ayam">No KTP</label>
                <input type='number' id="no_ktp" name='total_ayam' class="form-control @error('no_ktp') is-invalid @enderror" placeholder='nomor KTP'>
              </div>
              <div class="form-group">
                <label for="jk" class="font-weight-bold">Jenis Kelamin</label>
                    <select name="id_jurusan" id="id_jurusan" class="form-control" required>
                        <option value="">Pilih Jenis Kelamin</option>
                            @foreach($anakKandang as $anak)
                            <option value="{{ $anak->id }}"> {{ $anak->jk }} </option>
                            @endforeach
                    </select>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <td>{{ $ank->nama_anak_kandang }}</td>
        <td>{{ $ank->no_ktp }}</td>
        <td>{{ $ank->jk }}</td>
        <td>{{ $ank->telp }}</td>
        <td>{{ $ank->tmp_lahir }}</td>
        <td>{{ $ank->tgl_lahir }}</td>
        <td>{{ $ank->foto }}</td>

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
    $("#DataKelas").addClass("active");
  </script>
@endsection