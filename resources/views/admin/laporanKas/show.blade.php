@extends('template_backend.home')
@section('heading', 'Show Rapot')
@section('page')
  <li class="breadcrumb-item active">Show Rapot</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Show Rapot</h3>
      </div>
      <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
                <table class="table" style="margin-top: -10px;">
                </table>
                <hr>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="ctr" rowspan="2">No.</th>
                            <th rowspan="2">Tanggal</th>
                            <th class="ctr" colspan="3">Pemasukan</th>
                            <th class="ctr" colspan="3">Pengeluaran</th>
                        </tr>
                        <tr>
                            <th class="ctr">Deskripsi</th>
                            <th class="ctr">Jumlah</th>
                            <th class="ctr">Total Masuk</th>
                            <th class="ctr">Deskripsi</th>
                            <th class="ctr">Jumlah</th>
                            <th class="ctr">Total Keluar</th>
                        </tr>
                        <tr>
                            <th rowspan="2">Kauntungan</th>
                        </tr>
                    </thead>
                    <tbody>
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
        $("#Rapot").addClass("active");
    </script>
@endsection
