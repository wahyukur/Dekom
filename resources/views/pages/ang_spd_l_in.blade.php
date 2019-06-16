@extends('layouts.default')
@section('content')
<section class="content-header">
      <h1>
        Anggaran SPD
        <small>Input Anggaran SPD Luar Negeri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('ang_plth')}}">Kontrol SPD Luar Negeri</a></li>
        <li class="active">Input Anggaran SPD Luar Negeri</li>
      </ol>
</section>

<section class="content">
    <div class="callout callout-success">
        <h4>Selamat Datang! </h4>
        <p>Anda Login Sebagai Jabatan</p>
    </div>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Input Anggaran SPD(Luar)</h3>
        </div>
            <form role="form">
                <div class="box-body">
                    
                <div class="form-group">
                    <label>Nama Kegiatan</label>
                    <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                    </select>
                </div>

                <div class="form-group">
                  <label>Tempat</label>
                  <input type="text" class="form-control" placeholder="Tempat" disabled>
                </div>

                <div class="form-group">
                  <label>Penyelengara</label>
                  <input type="text" class="form-control" placeholder="Penyelengara" disabled>
                </div>

                <div class="form-group">
                  <label>Dihadiri</label>
                  <input type="text" class="form-control" placeholder="Dihadiri" disabled>
                </div>

                <div class="form-group">
                  <label>Tanggal Mulai</label>
                  <input type="text" class="form-control" placeholder="Tanggal Mulai" disabled>
                </div>

                <div class="form-group">
                  <label>Tanggal Berakhir</label>
                  <input type="text" class="form-control" placeholder="Tanggal Berakhir" disabled>
                </div>

                <div class="form-group">
                <label>Dihadiri</label>
                <select class="form-control select2" style="width: 100%;">
                  <option disabled="disabled">opt1 (disabled)</option>
                  <option disabled="disabled">opt2 (disabled)</option>
                </select>
              </div>

                <div class="form-group">
                    <label>Period</label>
                    <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputBiaya">Biaya</label>
                    <div class="input-group">   
                        <span class="input-group-addon">Rp.</span>
                        <input type="text" class="form-control" id="inputBiaya" placeholder="Masukkan Biaya">
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputJumlah">Jumlah</label>
                    <div class="input-group">
                        <span class="input-group-addon">Rp.</span>
                        <input type="text" class="form-control" id="inputJumlah" placeholder="Masukkan Jumlah Biaya">
                        <span class="input-group-addon">.00</span>
                    </div>
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