@extends('layouts.default')
@section('content')
<section class="content-header">
      <h1>
        Kegiatan Dekom
        <small>Input Kegiatan Dekom</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('kegiatan')}}">Kegiatan Dekom</a></li>
        <li class="active">Input Kegiatan Dekom</li>
      </ol>
</section>

<section class="content">
    <div class="callout callout-success">
        <h4>Selamat Datang! </h4>
        <p>Anda Login Sebagai Jabatan</p>
    </div>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Input Anggaran Pelatihan</h3>
        </div>
            <form role="form" action="{{ route('store_keg') }}" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                <div class="box-body">
                
                <div class="form-group">
                    <label>Jenis Kegiatan</label>
                    <select class="form-control" name="jenisKeg">
                        @foreach($tblJkeg as $JK)
                          <option value="{{ $JK->id }}">{{ $JK->jenis_kegiatan }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                  <label>Nama Kegiatan</label>
                  <input type="text" class="form-control" placeholder="Nama Kegiatan" name="namaKeg">
                </div>

                <div class="form-group">
                  <label>Tempat</label>
                  <input type="text" class="form-control" placeholder="Tempat" name="tmpKeg">
                </div>

                <div class="form-group">
                  <label>Penyelengara</label>
                  <input type="text" class="form-control" placeholder="Penyelengara" name="penyeKeg">
                </div>
                
                <div class="form-group">
                  <label>Menghadiri</label>
                  <select class="form-control myselect" multiple="multiple"
                          style="width: 100%;" id="myselect" name="hadirKeg[]">
                    <option>Akhmad Sukardi</option>
                    <option>Budi Setiawan</option>
                    <option>Rudi Purwono</option>
                    <option>Candra Fajri Ananda</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Tanggal Mulai:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker1" name="tglMulai">
                    </div>
                </div>

                <div class="form-group">
                  <label>Tanggal Berakhir:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker2" name="tglAkhir">
                    </div>
                </div>

                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" rows="3" placeholder="Boleh Dikosongi ..." name="ketKeg"></textarea>
                </div>

              </div>

                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
            </form>
</section>      
@stop