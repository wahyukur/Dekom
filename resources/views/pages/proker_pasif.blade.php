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
          <h3 class="box-title">Proker Pasif</h3>

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
                      @if ($proker->id == 1)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd1; ?>%"></div>
                      @elseif ($proker->id == 2)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd2; ?>%"></div>
                      @elseif ($proker->id == 3)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd3; ?>%"></div>
                      @elseif ($proker->id == 4)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd4; ?>%"></div>
                      @elseif ($proker->id == 6)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd5; ?>%"></div>
                      @elseif ($proker->id == 7)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd6; ?>%"></div>
                      @elseif ($proker->id == 8)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd7; ?>%"></div>
                      @elseif ($proker->id == 9)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd8; ?>%"></div>
                      @elseif ($proker->id == 10)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd9; ?>%"></div>
                      @elseif ($proker->id == 11)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd10; ?>%"></div>
                      @elseif ($proker->id == 12)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd11; ?>%"></div>
                      @elseif ($proker->id == 13)
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $dd12; ?>%"></div>
                      @else
                        <div class="progress-bar progress-bar-danger" style="width: 100%"></div>
                      @endif
                    </div>
                  </td>
                  <td>
                    @if ($proker->id == 1)
                      @if ($dd1 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 2)
                      @if ($dd2 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 3)
                      @if ($dd3 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 4)
                      @if ($dd4 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 6)
                      @if ($dd5 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 7)
                      @if ($dd6 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 8)
                      @if ($dd7 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 9)
                      @if ($dd8 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 10)
                      @if ($dd9 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 11)
                      @if ($dd10 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 12)
                      @if ($dd11 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @elseif ($proker->id == 13)
                      @if ($dd12 != 100)
                        <span class="badge bg-gray">Belum Terpenuhi</span>
                      @else
                        <span class="badge bg-green">Terpenuhi</span>
                      @endif
                    @else
                      <span class="badge bg-blue">Isidentil</span>
                    @endif
                  </td>
                  <td><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-bars"></i></button></td>
                </tr>
                @endforeach
                
              </table>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="#" class="btn btn-info" role="button">Cetak Proker Pasif Tahun Ini</a>
        </div>
        <!-- /.box-footer-->
    </div>

</section>    
@stop