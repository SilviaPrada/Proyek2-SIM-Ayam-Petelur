@extends('template_backend.home')
@section('heading', 'Trash Informasi')
@section('page')
  <li class="breadcrumb-item active">Trash Informasi</li>
@endsection
@section('content')
@php
    $no = 1;
@endphp
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Trash Data Informasi</h3>
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
        $("#TrashMapel").addClass("active");
    </script>
@endsection