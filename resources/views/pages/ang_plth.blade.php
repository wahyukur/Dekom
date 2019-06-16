@extends('layouts.default')
@section('content')
<section class="content-header">
      <h1>
        Anggaran Pelatihan
        <small>Kontrol Anggaran Pelatihan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kontrol Anggaran</li>
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
            <p>Penggunaan Anggaran Pelatihan Tahun Periode 201...</p>
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
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            <br>        
            <table class= "table table-hover">
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
                <tbody id="myTable">
                    @foreach($tblAngPlth as $ap)
                    <tr>
                        <td>{{ $ap->id }}</td>
                        <td>{{ $ap->nomor_coa }}</td>
                        <td>{{ $ap->nama_jenis }}</td>
                        <td>{{ $ap->perihal }}</td>
                        <td>{{ $ap->peserta }}</td>
                        <td>{{ $ap->tgl_mulai }}</td>
                        <td>{{ $ap->tgl_akhir }}</td>
                        <td>{{ $ap->biaya }}</td>
                        <td>{{ $ap->jumlah }}</td>
                        <td>{{ $ap->keterangan }}</td>
                        <td>
                            @if ($ap->otor == 'ok')
                            <button type="button" class="btn btn-success btn-sm"><i class="fa fa-check-square"></i></button>
                            @elseif ($ap->otor == 'no')
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
            <a href="{{ route('ang_plth_in') }}" class="btn btn-primary">Input Anggaran Pelatihan</a>
            <br>
            <p> </p>
        </div>
        <!-- /.box-footer-->
    </div>
</section>
@stop