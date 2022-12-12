@extends('template_backend.home')
@section('heading')
  <!-- Data Siswa {{ $kelas->nama_kelas }} -->
@endsection
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('#') }}">Anak Kandang</a></li>
  <li class="breadcrumb-item active">{{}}</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('#') }}" class="btn btn-default btn-sm"><i class="nav-icon fas fa-arrow-left"></i> &nbsp; Kembali</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Anak Kandang</th>
                    <th>No KTP</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- @foreach ($siswa as $data) -->
                    <tr>
                        <!-- <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_siswa }}</td>
                        <td>{{ $data->no_induk }}</td> -->
                        <td>
                            <a href="#" data-toggle="lightbox" data-title="Foto {{}}" data-gallery="gallery" data-footer='<a href="{{ route('#') }}" id="linkFotoGuru" class="btn btn-link btn-block btn-light"><i class="nav-icon fas fa-file-upload"></i> &nbsp; Ubah Foto</a>'>
                                <img src="#" width="130px" class="img-fluid mb-2">
                            </a>
                            <!-- {{-- https://siakad.didev.id/siswa/ubah-foto/{{$data->id}} --}} -->
                        </td>
                        <td>
                            <form action="{{ route('#') }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('#') }}" class="btn btn-info btn-sm mt-2"><i class="nav-icon fas fa-id-card"></i> &nbsp; Detail</a>
                                <a href="{{ route('#') }}" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                                <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
@endsection
@section('script')
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataSiswa").addClass("active");
    </script>
@endsection