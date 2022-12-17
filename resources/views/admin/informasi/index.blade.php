@extends('admin.template_backend.home')
@section('heading', 'Informasi')
@section('page')
  <li class="breadcrumb-item active">Informasi</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-mapel">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Informasi
                </button>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Penyakit</th>
                    <th>Gejala</th>
                    <th>Pengobatan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>
                        <form action="#" method="post">
                            @csrf
                            @method('delete')
                            <a href="#" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                            <button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                    </td>
                </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->

<!-- Extra large modal -->
<div class="modal fade bd-example-modal-md tambah-mapel" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Tambah Informasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="#" method="post">
          @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nama_mapel">Nama Penyakit</label>
                  <input type="text" id="nama_mapel" name="nama_mapel" class="form-control @error('nama_mapel') is-invalid @enderror" placeholder="">
                </div>
                <div class="form-group">
                  <label for="nama_mapel">Gejala</label>
                  <input type="text" id="nama_mapel" name="nama_mapel" class="form-control @error('nama_mapel') is-invalid @enderror" placeholder="">
                </div>
                <div class="form-group">
                  <label for="nama_mapel">Pengobatan</label>
                  <input type="text" id="nama_mapel" name="nama_mapel" class="form-control @error('nama_mapel') is-invalid @enderror" placeholder="">
                </div>
                <div class="form-group">
                  <label for="nama_mapel">Keterangan</label>
                  <input type="text" id="nama_mapel" name="nama_mapel" class="form-control @error('nama_mapel') is-invalid @enderror" placeholder="">
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
    $("#DataMapel").addClass("active");
  </script>
@endsection