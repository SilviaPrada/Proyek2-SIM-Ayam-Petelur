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
              {{-- <button type="button" class="btn btn-primary btn-sm" onclick="{{ route('informasiTernak.create') }}" data-toggle="modal" data-target="#form-kelas">
                  <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Informasi
              </button> --}}
              <a href="{{ route('informasiTernak.create') }}" >Tambah Informasi</a>
          </h3>
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
              @foreach($informasiTernak as $inform => $info)
                <tr>
                  <td>{{ $inform+1 }}</td>
                  <td>{{ $info->nama_penyakit }}</td>
                  <td>{{ $info->keterangan }}</td>
                  <td>{{ $info->gejala }}</td>
                  <td>{{ $info->pengobatan }}</td>
                  <td>
                      <a href="{{ route('informasiTernak.edit', $info->id) }}" >Edit</a>
                          {{-- <a href="{{ route('informasiTernak.destroy', $info->id) }}" >Hapus</a> --}}
                          {{-- <a href="/informasiTernak/{{ $info->id }}" data-toggle="modal" data-target="#delete{{ $info->id }}">Hapus</a> 
                          --}}
                          
                        <form action="{{ route('informasiTernak.destroy', $info->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                    </td>
                </tr>
                @include('admin.informasi.delete')
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
    $("#DataInformasi").addClass("active");
  </script>
@endsection

