@extends('admin.template_backend.home')
@section('heading', 'Edit Anak Kandang')
@section('page')
                                        <!-- {{ route('anakKandang.index') }} -->
  <li class="breadcrumb-item active"><a href="#">Anak Kandang</a></li>
  <li class="breadcrumb-item active">Edit Anak Kandang</li>
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
             <!-- {{ route('anakKandang.update', $anakKandang->id) }} -->
      <form action="#" method="post">
        @csrf
        @method('patch')
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="no_ktp">Nomor KTP</label>
                    <input type="text" id="no_ktp" name="no_ktp" value="#" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_anak_kandang">Nama Anak Kandang</label>
                    <input type="text" id="nama_anak_kandang" name="nama_anak_kandang" value="#" class="form-control @error('nama_anak_kandang') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select id="jk" name="jk" class="select2bs4 form-control @error('jk') is-invalid @enderror">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <!-- <option value="L"
                            @if ($anakKandang->jk == 'L')
                                selected
                            @endif
                        >Laki-Laki</option>
                        <option value="P"
                            @if ($anakKandang->jk == 'P')
                                selected
                            @endif
                        >Perempuan</option> -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <input type="text" id="tmp_lahir" name="tmp_lahir" value="#" class="form-control @error('tmp_lahir') is-invalid @enderror">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telp">Nomor Telpon/HP</label>
                    <input type="text" id="telp" name="telp" value="#" onkeypress="return inputAngka(event)" class="form-control @error('telp') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" value="#" class="form-control @error('tgl_lahir') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="baterai_id">Baterai</label>
                    <select id="baterai_id" name="baterai_id" class="select2bs4 form-control @error('baterai_id') is-invalid @enderror">
                        <option value="">-- Pilih Baterai --</option>
                        <!-- @foreach ($anakKandang as $data)
                            <option value="#"
                                @if ($anakKandang->baterai_id == $data->id)
                                    selected
                                @endif
                            >{{ $data->nama_baterai }}</option>
                        @endforeach -->
                    </select>
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
        // {{ route('anakKandang.baterai', Crypt::encrypt($anakKandang->baterai_id)) }}
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataAnakKandang").addClass("active");
</script>
@endsection