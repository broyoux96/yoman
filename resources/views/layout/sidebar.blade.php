<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('dashboard') }}" class="brand-link">
      <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('dashboard') }}" class="nav-link">
              <i class="fa fa-home" aria-hidden="true"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Report</li>
          <li class="nav-item">
            <a href="{{ url('laporanpenjualan') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Laporan Penjualan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('biayatambahan') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Biaya Tambahan
              </p>
            </a>
          </li>
           <li class="nav-header">Data Transaksi</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Data Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('pembelian') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('penjualan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('kalender') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kalender</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ url('stockopname') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock Opname</p>
                </a>
              </li>
            </ul>
                <li class="nav-header">Data Barang</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Data Barang
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('databarang') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Barang</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('datagudang') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Gudang</p>
                  </a>
                </li>
            </li>
             </ul>
             <li class="nav-header">Data Barang</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Data User
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('datacustomer') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Customer</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('datasupplier') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Supplier</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('datapegawai') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pegawai</p>
                  </a>
                </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>