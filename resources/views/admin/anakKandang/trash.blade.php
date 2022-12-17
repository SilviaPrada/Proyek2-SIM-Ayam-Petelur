@extends('admin.template_backend.home')
@section('heading', 'Trash Anak Kandang')
@section('page')
  <li class="breadcrumb-item active">Trash Anak Kandang</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Trash Data Anak Kandang</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>Nomor KTP</th>
                    <th>Baterai</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- @foreach ($anakKandang as $data) -->
                <tr>
                    <!-- <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_anak_kandang }}</td>
                    <td>{{ $data->no_ktp }}</td>
                    <td>{{ $data->baterai->nama_baterai }}</td> -->
                    <td>
                        <a href="#" data-toggle="lightbox" data-title="Foto {{ $data->nama_anak_kandang }}" data-gallery="gallery" data-footer='<a href="#" id="linkFotoGuru" class="btn btn-link btn-block btn-light"><i class="nav-icon fas fa-file-upload"></i> &nbsp; Ubah Foto</a>'>
                            <img src="#" width="130px" class="img-fluid mb-2">
                        </a>
                        <!-- {{-- https://siakad.didev.id/siswa/ubah-foto/{{$data->id}} --}} -->
                    </td>
                    <td>
                        <form action="#" method="post">
                            <!-- @csrf
                            @method('delete') -->
                            <a href="#" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-undo"></i> &nbsp; Restore</a>
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                    </td>
                </tr>
                <!-- @endforeach -->
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
        $("#TrashAnakKandang").addClass("active");
    </script>
@endsection