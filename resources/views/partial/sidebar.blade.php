<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link text-center">
      <h2 class="brand-text font-weight-light">DAPEN</h2>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link {{ Request::is('/') ? 'active': '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item {{ ($page=='Jenis Barang' || $page=='Data Barang')? 'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Barang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="jbarang" class="nav-link {{ Request::is('jbarang') ? 'active': '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jenis Barang</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dbarang" class="nav-link {{ Request::is('dbarang') ? 'active': '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Barang</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="/transaksi" class="nav-link {{ Request::is('transaksi') ? 'active': '' }}">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Transaksi Penjualan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>