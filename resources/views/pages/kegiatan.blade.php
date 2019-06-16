@extends('layouts.default')
@section('content')
<section class="content-header">
      <h1>
        Kegiatan Dekom
        <small>Berisi Daftar Kegiatan Dekom</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kegiatan Dekom</li>
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
          <h3 class="box-title">Daftar Kegiatan Dekom</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">

        <div class="row">
        <form class="form-horizontal" method = "post" id="tab" action="{{ route('period_keg') }}">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                <label class="control-label">Semester : </label>
                    <div class="col-sm-2">
                        <select id="semester" name="semester" class="form-control">            
                          <option value="1"> Semester 1
                          <option value="2"> Semester 2
                        </select>        
                    </div>
                <label>Tahun</label>
                    <div class="col-sm-2">
                    <select id="tahun" name="tahun" class="form-control">            
                          @foreach ($tahun as $period)
                          <option value="{{ $period->year }}">{{ $period->year }} 
                          @endforeach
                        </select>
                    </div>
                    
                    <div class="col-sm-3">    
                        <button id="submit" class="btn btn-primary pull-right ">Proses</button>
                    </div>
        </form>
            </div>

        <br>        
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Kegiatan</th>
                    <th>Nama Kegiatan</th>
                    <th>Tempat</th>
                    <th>Penyelengara</th>
                    <th>Dihadiri</th>
                    <th>Mulai</th>  
                    <th>Akhir</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="myTable">   
                @foreach ($tblkeg as $keg)
                    <tr>
                            <td>{{ $index }}</td>
                            <td>{{ $keg->jenis_kegiatan }}</td>
                            <td>{{ $keg->nama_keg }}</td>
                            <td>{{ $keg->tempat }}</td>
                            <td>{{ $keg->penyelengara }}</td>
                            <td>{{ $keg->dihadiri }}</td>
                            <td>{{ $keg->tgl_mulai }}</td>
                            <td>{{ $keg->tgl_akhir }}</td>
                            <td>{{ $keg->keterangan }}</td>
                            <td>
                                @if ($keg->check == 'ok')
                                <button type="button" class="btn btn-success btn-sm"><i class="fa fa-check-square"></i></button>
                                @elseif ($keg->check == 'no')
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
        <a href="{{ route('kegiatan_in') }}" class="btn btn-primary">Input Kegiatan Baru</a>  
        <br>
        <p> </p>
        </div>
        <!-- /.box-footer-->
    </div>
</section>    


@stop