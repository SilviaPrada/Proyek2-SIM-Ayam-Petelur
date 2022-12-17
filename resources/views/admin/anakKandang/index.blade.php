@extends('admin.template_backend.home')
@section('heading', 'Data Anak Kandang')
@section('page')
  <li class="breadcrumb-item active">Data Anak Kandang</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Anak Kandang
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#dropTable">
                    <i class="nav-icon fas fa-minus-circle"></i> &nbsp; Drop
                </button>
            </h3>
        </div>
        <!-- Start Drop Data -->
        <div class="modal fade" id="dropTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
            <form method="post" action="#"> 
                    @csrf
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Apakah kamu yakin drop semua data?</h5>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-danger">Drop</button>
						</div>
					</div>
				</form>
			</div>
		</div>
        <!-- End Drop Data -->
        <!-- Strat card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Baterai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm"><i class="nav-icon fas fa-search-plus"></i> &nbsp; Ditails</a>
                        </td>
                    </tr>
            </tbody>
          </table>
        </div>
        <!-- End card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->

<!-- Extra large modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Tambah Data Anak Kandang</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
      <form action="#" method="post" enctype="multipart/form-data">  
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="no_ktp">Nomor KTP</label>
                        <input type="text" id="no_ktp" name="no_ktp" onkeypress="return inputAngka(event)" class="form-control @error('no_ktp') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="nama_anak_kandang">Nama Anak Kandang</label>
                        <input type="text" id="nama_anak_kandang" name="nama_anak_kandang" class="form-control @error('nama_anak_kandang') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select id="jk" name="jk" class="select2bs4 form-control @error('jk') is-invalid @enderror">
                            <option value="#">-- Pilih Jenis Kelamin --</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tmp_lahir">Tempat Lahir</label>
                        <input type="text" id="tmp_lahir" name="tmp_lahir" class="form-control @error('tmp_lahir') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="foto_anak_kandang">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="foto_anak_kandang" class="custom-file-input @error('foto_anak_kandang') is-invalid @enderror" id="foto_anak_kandang">
                                <label class="custom-file-label" for="foto_anak_kandang">Pilih file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                        <label for="telp">Nomor Telpon</label>
                        <input type="text" id="telp" name="telp" onkeypress="return inputAngka(event)" class="form-control @error('telp') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="baterai_id">Baterai</label>
                        <select id="baterai_id" name="baterai_id" class="select2bs4 form-control @error('baterai_id') is-invalid @enderror">
                            <option value="">-- Pilih Baterai --</option>
                        </select>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
              <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Tambahkan</button>
          </form>
      </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataAnakKandang").addClass("active");
    </script>
@endsection