@extends('layouts.default')
@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Dashboard
        <small>Sistem Dekom</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
</section>
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>

                  <p>Judul 1</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                  <p>Anggaran</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>11</h3>

                  <p>Kontak Dekom</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>

                  <p>Lain-lain</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <!-- <h2>Galeri Dekom</h2> -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" style= "width:100%; height: 500px !important; " >

                <div class="item active">
                  <img src="{{URL::asset('img/img1.jpg')}}" alt="Los Angeles" style="width:100%;">
                  <div class="carousel-caption">
                    <h3>Tanggal Kegiatan</h3>
                    <p>Deskripsi Kegiatan</p>
                  </div>
                </div>

                <div class="item">
                  <img src="{{URL::asset('img/img2.jpg')}}" alt="Chicago" style="width:100%;">
                  <div class="carousel-caption">
                  <h3>Tanggal Kegiatan</h3>
                    <p>Deskripsi Kegiatan</p>
                  </div>
                </div>
              
                <div class="item">
                  <img src="{{URL::asset('img/img3.jpg')}}" alt="New York" style="width:100%;">
                  <div class="carousel-caption">
                    <h3>Tanggal Kegiatan
                    </h3>
                    <p>Deskripsi Kegiatan</p>
                  </div>  
                </div>
              </div>
              
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <h1 style="font-size:50px; text-align:center; border-bottom: 6px solid black;">GALERY</h1>
            <div class="row">
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="{{URL::asset('img/img1.jpg')}}" target="_blank">
                    <img src="{{URL::asset('img/img1.jpg')}}" alt="Lights" style="width:100%">
                    <div class="caption">
                      <p>Pemandangan wow.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="{{URL::asset('img/img2.jpg')}}" target="_blank">
                    <img src="{{URL::asset('img/img2.jpg')}}" alt="Nature" style="width:100%">
                    <div class="caption">
                      <p>Wow Pemandangan bagus.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="{{URL::asset('img/img3.jpg')}}" target="_blank">
                    <img src="{{URL::asset('img/img3.jpg')}}" alt="Fjords" style="width:100%">
                    <div class="caption">
                      <p>Wow wow wow Pemandang bagus.</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
</section>
@stop