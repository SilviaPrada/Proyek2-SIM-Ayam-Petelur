@extends('admin.template_backend.home')
@section('heading', 'Trash Data Baterai')
@section('page')
  <li class="breadcrumb-item active">Trash Data Baterai</li>
@endsection
@section('content')
<!-- @php
    $no = 1;
@endphp -->
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Trash Data Baterai</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Baterai</th>
                    <th>Total Ayam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <!-- @foreach ($bateraiKandang as $data) -->
                <tr>
                    <!-- <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_baterai }}</td> -->
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
        $("#TrashBaterai").addClass("active");
    </script>
@endsection