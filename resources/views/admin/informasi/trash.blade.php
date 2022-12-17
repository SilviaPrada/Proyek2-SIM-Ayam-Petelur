@extends('admin.template_backend.home')
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
                    <th>Keterangan</th>
                    <th>Gejala</th>
                    <th>Pengobatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <!-- @foreach ($informasiTernak as $data) -->
                <tr>
                    <!-- <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_penyakit }}</td> -->
                    <td>
                        <form action="#" method="post">
                            @csrf
                            @method('delete')
                            <a href="#" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-undo"></i> &nbsp; Restore</a>
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#TrashInformasi").addClass("active");
    </script>
@endsection