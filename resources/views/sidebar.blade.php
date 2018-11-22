<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Tugas</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Menu</li>
      <li>
        <a href="/">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Anggota</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('DataAnggota.index')}}"><i class="fa fa-circle-o"></i> Data Anggota</a></li>
          <li><a href="{{route('DataAnggota.create')}}"><i class="fa fa-circle-o"></i> Tambah Anggota</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Buku</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('DataBuku.index')}}"><i class="fa fa-circle-o"></i> DataBuku</a></li>
          <li><a href="{{route('DataBuku.create')}}"><i class="fa fa-circle-o"></i> Tambah Buku</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Peminjaman</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('DataPeminjaman.index')}}"><i class="fa fa-circle-o"></i> Data Peminjaman</a></li>
          <li><a href="{{route('DataPeminjaman.create')}}"><i class="fa fa-circle-o"></i> Tambah Peminjaman</a></li>
        </ul>
      </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Pengembalian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li><a href="{{route('DataPengembalian.index')}}"><i class="fa fa-circle-o"></i> Data Pengembalian</a></li>
            
          </ul>
        </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
