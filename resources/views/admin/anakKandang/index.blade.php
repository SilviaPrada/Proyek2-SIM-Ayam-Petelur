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
              {{-- <button type="button" class="btn btn-primary btn-sm" onclick="{{ route('bateraiKandang.create') }}" data-toggle="modal" data-target="#form-kelas">
                  <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Baterai
              </button> --}}
              <a href="{{ route('anakKandang.create') }}" >Tambah Data</a>
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>No KTP</th>
                      <th>Jenis Kelamin</th>
                      <th>Telepon</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Foto</th>
                      <th>Created At</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
                @foreach($anakKandang as $anak => $ank)
                  <tr>
                      <td>{{ $anak+1 }}</td>
                      <td>{{ $ank->nama_anak_kandang }}</td>
                      <td>{{ $ank->no_ktp }}</td>
                      <td>{{ $ank->jk }}</td>
                      <td>{{ $ank->telp }}</td>
                      <td>{{ $ank->tmp_lahir }}</td>
                      <td>{{ $ank->tgl_lahir }}</td>
                      <td>{{ $ank->foto }}</td>
                      <td>{{ $ank->created_at->format('Y/m/d') }}</td>
                      <td>
                        <a href="{{ route('anakKandang.edit', $bat->id) }}" >Edit</a>
                          
                        <form action="{{ route('anakKandang.destroy', $bat->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                      </td>
                  </tr>
                  @include('admin.anakKandang.delete')
                @endforeach  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

@endsection
@section('script')
  <script>
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataKelas").addClass("active");
  </script>
@endsection