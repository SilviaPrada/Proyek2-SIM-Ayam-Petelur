@extends('admin.template_backend.home')
@section('heading', 'Data Baterai')
@section('page')
  <li class="breadcrumb-item active">Data Baterai</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i class="nav-icon fas fa-folder-plus"></i><a href="{{ route('bateraiKandang.create') }}" > &nbsp; Tambah Data Baterai
                </button>
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Nama Baterai</th>
                      <th>Total Ayam</th>
                      <th>Created At</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($bateraiKandang as $baterai => $bat)
                  <tr>
                      <td>{{ $baterai+1 }}</td>
                      <td>{{ $bat->nama_baterai }}</td>
                      <td>{{ $bat->total_ayam }}</td>
                      <td>{{ $bat->created_at->format('Y/m/d') }}</td>
                      <td>
                          <a href="{{ route('bateraiKandang.edit', $bat->id) }}" >Edit</a>
                          {{-- <a href="{{ route('bateraiKandang.destroy', $bat->id) }}" >Hapus</a> --}}
                          {{-- <a href="/bateraiKandang/{{ $bat->id }}" data-toggle="modal" data-target="#delete{{ $bat->id }}">Hapus</a> 
                          --}}
                          
                        <form action="{{ route('bateraiKandang.destroy', $bat->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                      </td>
                  </tr>
                  @include('admin.baterai.delete')
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
    $("#DataBaterai").addClass("active");
  </script>
@endsection