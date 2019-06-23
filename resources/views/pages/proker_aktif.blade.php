@extends('layouts.default')
@section('content')
<section class="content-header">
      <h1>
        Program Kerja Dekom
        <small>Proker Aktif</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Program Kerja Aktif</li>
      </ol>
</section>

<section class="content">
    <div class="callout callout-success">
        <h4>Selamat Datang! </h4>
        <p>Anda Login Sebagai Jabatan</p>
    </div>
    
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Proker Aktif Periode ..</h3>

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
                <tr>
                  <td>1.</td>
                  <td>Rapat Internal Dewan Komisaris</td>
                  <td>Minimal 1 Bulan 1 Kali</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-gray">Belum Terpenuhi</span></td>
                  <td><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-bars"></i></button></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Rapat Dekom dengan Direksi</td>
                  <td>Minimal 2 Bulan 1 Kali</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-gray">Belum Terpenuhi</span></td>
                  <td><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-bars"></i></button></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Mengikuti Kegiatan Evaluasi Kinerja Cabang / Unit Kerja</td>
                  <td>Minim Setiap 4 Bulan 1 Kali</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-danger" style="width: 15%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-gray">Belum Terpenuhi</span></td>
                  <td><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-bars"></i></button></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Kunjungan Cabang Dalam Rangka Melaksanakan Fungsi Pengawasan</td>
                  <td>Minimal 3 Bulan 1 Kali</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-danger" style="width: 15%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-gray">Belum Terpenuhi</span></td>
                  <td><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-bars"></i></button></td>
                </tr>
              </table>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="#" class="btn btn-info" role="button">Cetak Proker Aktif Periode ..</a>
          <br>
          <p> </p>
        </div>
        <!-- /.box-footer-->
    </div>

</section>    
@stop