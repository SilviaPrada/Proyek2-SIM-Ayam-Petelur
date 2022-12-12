@extends('template_backend.home')
@section('heading', 'Trash Kelas')
@section('page')
  <li class="breadcrumb-item active">Trash Baterai</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Trash Data Baterai</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Baterai</th>
                    <th>Jumlah Ayam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!--  -->
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $("#ViewTrash").addClass("active");
        $("#liViewTrash").addClass("menu-open");
        $("#TrashBaterai").addClass("active");
    </script>
@endsection