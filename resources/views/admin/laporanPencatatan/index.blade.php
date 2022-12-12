@extends('template_backend.home')
@section('heading', 'Data Pencatatan')
@section('page')
  <li class="breadcrumb-item active"><a href="#">Data Pencatatan</a></li>
  <li class="breadcrumb-item active"></li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            <a href="#" class="btn btn-default btn-sm"><i class="nav-icon fas fa-arrow-left"></i> &nbsp; Kembali</a>
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Anak Kandang/th>
                  <th>Baterai</th>
                  <th>Aksi</th>
              </thead>
              <tbody>
                  <tr>
                    <td><a href="#" class="btn btn-info btn-sm"><i class="nav-icon fas fa-search-plus"></i> &nbsp; Show Pencatatan</a></td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection
@section('script')
    <script>
        $("#Nilai").addClass("active");
        $("#liNilai").addClass("menu-open");
        $("#Ulangan").addClass("active");
    </script>
@endsection