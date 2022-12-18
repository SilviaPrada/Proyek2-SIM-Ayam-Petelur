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
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i class="nav-icon fas fa-folder-plus"></i><a href="{{ route('anakKandang.create') }}" > &nbsp; Tambah Data Anak Kandang
                </button>

            </h3>
        </div>
        <!-- Strat card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Anak Kandang</th>
                    <th>No.KTP</th>
                    <th>Jenis Kelamin</th>
                    <th>Telepon</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Baterai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($anakKandang as $anakK => $ankKdg)
                <tr>
                  <td>{{ $anakK+1 }}</td>
                  <td>{{ $ankKdg->nama_anak_kandang}}</td>
                  <td>{{ $ankKdg->no_ktp }}</td>
                  <td>{{ $ankKdg->jk }}</td>
                  <td>{{ $ankKdg->telp }}</td>
                  <td>{{ $ankKdg->tmp_lahir }}</td>
                  <td>{{ $ankKdg->tgl_lahir }}</td>
                  <td>{{ $ankKdg->baterai_id }}</td>
                  <td>
                      <a href="{{ route('anakKandang.edit', $ankKdg->id) }}" >Edit</a>
                          {{-- <a href="{{ route('anakKandang.destroy', $ankKdg->id) }}" >Hapus</a> --}}
                          {{-- <a href="/anakKandang/{{ $ankKdg->id }}" data-toggle="modal" data-target="#delete{{ $ankKdg->id }}">Hapus</a> 
                          --}}
                          
                        <form action="{{ route('anakKandang.destroy', $ankKdg->id) }}" method="post">
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
<!-- /.col -->
@endsection
@section('script')
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataAnakKandang").addClass("active");
    </script>
@endsection