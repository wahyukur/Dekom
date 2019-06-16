<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Hello!</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        
        <li>
          <a href="{{ route('kegiatan') }}">
            <i class="fa fa-calendar"></i> <span> Kegiatan Dekom</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red"> Not Yet!</small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-tasks"></i> <span> Program Kerja</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('pk_aktif') }}"><i class="fa fa-circle-o"></i> Proker Aktif</a></li>
            <li><a href="{{ route('pk_pasif') }}"><i class="fa fa-circle-o"></i> Proker Pasif</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span> Kontrol Anggaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('ang_plth') }}"><i class="fa fa-circle-o"></i> Anggaran Pelatihan</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Anggaran SPD
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('ang_spd_dalam') }}"><i class="fa fa-circle-o"></i> SPD Dalam Negeri</a></li>
                <li><a href="{{ route('ang_spd_luar') }}"><i class="fa fa-circle-o"></i> SPD Luar Negeri</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-universal-access"></i> <span> Kompetensi Komisaris</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span> Arsip Dekom</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Notulen Rapat Dekom
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Rapat Dewan Komisaris</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Rapat Dekom &  Direksi</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Rapat Komite</a></li>
              </ul>
            </li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-check-square-o"></i> <span> Daftar Hadir</span>
            <span class="pull-right-container">
            <small class="label pull-right bg-green"> Penting!</small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Bapak-Bapak Komisaris</a></li>
          </ul>
        </li>

        <!-- <li>
          <a href="{{ route('kalender') }}">
            <i class="fa fa-calendar"></i> <span> Kalender Dekom</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red"> Not Yet!</small>
            </span>
          </a>
        </li> -->

        <li class="header">Evaluasi</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Evaluasi Kinerja</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Sisa Anggaran</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>