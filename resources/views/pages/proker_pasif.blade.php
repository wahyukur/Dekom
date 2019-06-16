@extends('layouts.default')
@section('content')
<section class="content-header">
      <h1>
        Program Kerja Dekom
        <small>Proker Pasif</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Program Kerja Pasif</li>
      </ol>
</section>

<section class="content">
    <div class="callout callout-success">
        <h4>Selamat Datang! </h4>
        <p>Anda Login Sebagai Jabatan</p>
    </div>
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Proker Pasif Bulan Ini</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">No</th>
                  <th style="width: 510px">Task</th>
                  <th>Keterangan</th>
                  <th>Progress</th>
                  <th style="width: 40px">Status</th>
                  <th style="width: 40px">Detil</th>
                </tr>
                {{ $index = 1 }}
                @foreach ($tblproker as $proker)  
                <tr>
                  <td>{{ $index }}</td>
                  <td>{{ $proker->proker }}</td>
                  <td>{{ $proker->keterangan }}</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 100%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">Terpenuhi</span></td>
                  <td><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-bars"></i></button></td>
                  {{ $index++ }}
                </tr>
                @endforeach
                
              </table>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="#" class="btn btn-info" role="button">Cetak Proker Pasif Bulan Ini</a>
        </div>
        <!-- /.box-footer-->
    </div>
    
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Proker Pasif Periode ..</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">No</th>
                  <th style="width: 510px">Task</th>
                  <th>Keterangan</th>
                  <th>Progress</th>
                  <th style="width: 40px">Status</th>
                  <th style="width: 40px">Detil</th>
                </tr>
                {{ $index = 1 }}
                @foreach ($tblproker as $proker)  
                <tr>
                  <td>{{ $index }}</td>
                  <td>{{ $proker->proker }}</td>
                  <td>{{ $proker->keterangan }}</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-gray">Belum Terpenuhi</span></td>
                  <td><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-bars"></i></button></td>
                  {{ $index++ }}
                </tr>
                @endforeach
              </table>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="#" class="btn btn-info" role="button">Cetak Proker Pasif Periode ..</a>
          <br>
          <p> </p>
        </div>
        <!-- /.box-footer-->
    </div>

</section>    
@stop