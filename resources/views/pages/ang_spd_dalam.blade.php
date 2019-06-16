@extends('layouts.default')
@section('content')
<section class="content-header">
      <h1>
        Anggaran Perjalanan Dinas Dalam Negeri
        <small>Kontrol Anggaran SPD</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kontrol Anggaran SPD (Dalam)</li>
      </ol>
</section>
<section class="content">
    <div class="callout callout-success">
        <h4>Selamat Datang! </h4>
        <p>Anda Login Sebagai Jabatan</p>
    </div>
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Presentase Penggunaan Anggaran</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            <p>Penggunaan Anggaran Perjalanan Dinas Dalam Negeri Tahun Periode 201...</p>
            <div class="progress">
                <div id="two" class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                    80%
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- PEMBATAS KONTEN -->
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Kegiatan Dekom</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            <table id="example1" class= "table table-bordered table-striped">
                <thead class= "thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>No. COA</th>
                        <th>Jenis Kegiatan</th>
                        <th>Perihal</th>
                        <th>Peserta</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Akhir</th>
                        <th>BiayaPerHari</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tblAngSpd as $as)
                    <tr>
                        <td>{{ $as->id }}</td>
                        <td>{{ $as->nomor_coa }}</td>
                        <td>{{ $as->nama_jenis }}</td>
                        <td>{{ $as->perihal }}</td>
                        <td>{{ $as->peserta }}</td>
                        <td>{{ $as->tgl_mulai }}</td>
                        <td>{{ $as->tgl_akhir }}</td>
                        <td>{{ $as->biaya }}</td>
                        <td>{{ $as->jumlah }}</td>
                        <td>{{ $as->keterangan }}</td>
                        <td>
                            @if ($as->otor == 'ok')
                            <button type="button" class="btn btn-success btn-sm"><i class="fa fa-check-square"></i></button>
                            @elseif ($as->otor == 'no')
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button>
                            @endif
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table> 
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="{{ route('ang_spd_d_in') }}" class="btn btn-primary">Input Anggaran SPD</a>
            <br>
            <p> </p>
        </div>
        <!-- /.box-footer-->
    </div>
</section>
@stop