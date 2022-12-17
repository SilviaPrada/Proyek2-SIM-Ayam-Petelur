@extends('admin.template_backend.home')
@section('heading', 'Data Baterai')
@section('page')
<li class="breadcrumb-item active">Data Baterai</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-mapel">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Baterai
                </button>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Baterai</th>
                    <th>Total Ayam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                    <td>
                    <td>
                    <td>
                        <form action="#" method="post">
                            @csrf
                            @method('delete')
                            <a href="#" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                            <button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                        </td>
                        </td>
                        </td>
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
        <h4 class="modal-title">Tambah Data Baterai</h4>
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
                  <label for="nama_baterai">Nama baterai</label>
                  <input type="text" id="nama_baterai" name="nama_baterai" class="form-control @error('nama_baterai') is-invalid @enderror" placeholder="{{ __('Nama Baterai') }}">
                </div>
                <div class="form-group">
                  <label for="total_ayam">Total Ayam</label>
                  <input type="text" id="total_ayam" name="total_ayam" class="form-control @error('total_ayam') is-invalid @enderror" placeholder="{{ __('Total Ayam') }}">
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
    $("#DataBaterai").addClass("active");
  </script>
@endsection

