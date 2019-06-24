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
                @php $no = 1; @endphp
                @foreach ($tblproker as $proker)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $proker->jenis_kegiatan }}</td>
                  <td>{{ $proker->keterangan }}</td>
                  <td>
                    <div class="progress progress-xs">
                      @if ($proker->id == 20)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd1; ?>%"></div>
                      @elseif ($proker->id == 21)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd2; ?>%"></div>
                      @elseif ($proker->id == 22)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd3; ?>%"></div>
                      @else
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd4; ?>%"></div>
                      @endif
                    </div>
                  </td>
                  <td>
                    @if ($proker->id == 20)
                      @if ($dd1 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 21)
                      @if ($dd2 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 22)
                      @if ($dd3 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @else
                      @if ($dd4 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @endif
                  </td>
                  <td><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-bars"></i></button></td>
                </tr>
                @endforeach
              </table>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="{{ route('report1') }}" class="btn btn-info" role="button" target="_blank">Cetak Proker Aktif Periode ..</a>
          <br>
          <p> </p>
        </div>
        <!-- /.box-footer-->
    </div>

</section>    
@stop