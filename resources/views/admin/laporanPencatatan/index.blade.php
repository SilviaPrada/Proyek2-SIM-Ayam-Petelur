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
            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i class="nav-icon fas fa-folder-plus"></i><a href="{{ route('pencatatanAyam.create') }}" > &nbsp; Tambah Pencatatan
            </button>
          </h3>
        </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Waktu</th>
                  <th>Kolom ID</th>
                  <th>Produktifitas</th>
                  <th>Kondisi</th>
                  <th>Jumlah Telur</th>
                  <th>Aksi</th>
              </thead>
              <tbody>
              @foreach($pencatatanAyam as $pencatatan => $catat)
                  <tr>
                      <td>{{ $pencatatan+1 }}</td>
                      <td>{{ $catat->waktu }}</td>
                      <td>{{ $catat->kolom_id }}</td>
                      <td>{{ $catat->produktifitas }}</td>
                      <td>{{ $catat->kondisi }}</td>
                      <td>{{ $catat->jumlah_telur }}</td>
                      <td>
                          <a href="{{ route('pencatatanAyam.edit', $catat->id) }}" >Edit</a>
                          {{-- <a href="{{ route('pencatatanAyam.destroy', $catat->id) }}" >Hapus</a> --}}
                          {{-- <a href="/pencatatanAyam/{{ $catat->id }}" data-toggle="modal" data-target="#delete{{ $catat->id }}">Hapus</a> 
                          --}}
                          
                        <form action="{{ route('pencatatanAyam.destroy', $catat->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                      </td>
                  </tr>
                  @include('admin.laporanPencatatan.delete')
                  @endforeach
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
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataPencatatan").addClass("active");
    </script>
@endsection