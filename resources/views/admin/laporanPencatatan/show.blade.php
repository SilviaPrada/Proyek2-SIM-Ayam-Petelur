@extends('template_backend.home')
@section('heading', 'Show Pencatatan')
@section('page')
  <li class="breadcrumb-item active">Show Pencatatan</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Show Pencatatan</h3>
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
                            <th class="ctr">No.</th>
                            <th>Tanggal</th>
                            <th class="ctr">Jumlah Panen Telur</th>
                            <th class="ctr">Jumlah Telur Terjual</th>
                            <th class="ctr">Stok Telur</th>
                            <th class="ctr">Jumlah Ayam Awal</th>
                            <th class="ctr">Jumlah Ayam Saat Ini</th>
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
@endsection
