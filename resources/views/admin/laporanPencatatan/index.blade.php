@extends('admin.template_backend.home')
@section('heading', 'Data Pencatatan')
@section('page')
  <li class="breadcrumb-item active">Data Pencatatan</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">
              {{-- <button type="button" class="btn btn-primary btn-sm" onclick="{{ route('pencatatanAyam.create') }}" data-toggle="modal" data-target="#form-kelas">
                  <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Pencatatan
              </button> --}}
              <a href="{{ route('pencatatanAyam.create') }}" >Tambah Data</a>
          </h3>
        </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Waktu</th>
                  <th>Kolom ID</th>
                  <th>Produktivitas</th>
                  <th>Kondisi</th>
                  <th>Jumlah Telur</th>
                  <th>Aksi</th>
              </thead>
              <tbody>
              <td>
                          <a href="{{ route('laporanPencatatan.edit', $bat->id) }}" >Edit</a>
                          {{-- <a href="{{ route('laporanPencatatan.destroy', $bat->id) }}" >Hapus</a> --}}
                          {{-- <a href="/pencatatanAyam/{{ $bat->id }}" data-toggle="modal" data-target="#delete{{ $bat->id }}">Hapus</a> 
                          --}}
                          
                        <form action="{{ route('bateraiKandang.destroy', $bat->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                      </td>
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