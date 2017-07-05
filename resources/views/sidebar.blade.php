<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Petugas</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
<span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="#"><span>Dashboard</span></a></li>
            <li class="treeview">

                <a href="#"><i class="fa fa-user"></i><span>Data Master Berita</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Tambah Berita</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Edit Berita</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Hapus Berita</a></li>
                </ul>
            </li>

             <li class="treeview">

                <a href="#"><i class="fa fa-user"></i><span>Data Master User</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Non Aktifkan User</a></li>
                  
                </ul>
            </li>

            <li class="treeview">

                <a href="#"><i class="fa fa-user"></i><span>Laporan Berita</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Per Minggu</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Per Bulan</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Per Tahun</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>