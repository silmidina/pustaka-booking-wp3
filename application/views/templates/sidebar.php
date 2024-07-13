<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-book"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Looping Menu-->
  <div class="sidebar-heading">
    Home
  </div>
  <li class="nav-item active">
    <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php if (uri_string() == 'admin') echo 'active'; ?>">
    <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
      <i class="fa fa-fw fa-home"></i>

      <span>Dashboard</span></a>
  </li>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider mt-3">

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu
  </div>
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <!-- Nav Item - Dashboard -->
  <li class="nav-item dropdown <?php if (uri_string() == 'buku/kategori' || strpos(uri_string(), 'buku/ubahkategori') !== false || uri_string() == 'buku' || strpos(uri_string(), 'buku/ubahBuku') !== false || uri_string() == 'user/anggota' || strpos(uri_string(), 'user/ubahuser') !== false) echo 'active'; ?>">
    <a class="nav-link dropdown-toggle pb-0" href="#" id="dropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-bars"></i>
      <span>Menu</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item <?php if (uri_string() == 'buku/kategori' || strpos(uri_string(), 'buku/ubahkategori') !== false) echo 'active'; ?>" href="<?= base_url('buku/kategori'); ?>">
        <i class="fa fa-fw fa-tags"></i>
        <span>Kategori Buku</span>
      </a>
      <a class="dropdown-item <?php if (uri_string() == 'buku' || strpos(uri_string(), 'buku/ubahBuku') !== false) echo 'active'; ?>" href="<?= base_url('buku'); ?>">
        <i class="fa fa-fw fa-book"></i>
        <span>Data Buku</span>
      </a>
      <a class="dropdown-item <?php if (uri_string() == 'user/anggota' || strpos(uri_string(), 'user/ubahuser') !== false) echo 'active'; ?>" href="<?= base_url('user/anggota'); ?>">
        <i class="fas fa-fw fa-users"></i>
        <span>Data Anggota</span>
      </a>
    </div>
  </li>

  </li>

  <!-- Divider -->
  <hr class="sidebar-divider mt-3">

  <!-- Heading -->
  <div class="sidebar-heading">
    Transaksi
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <!-- Nav Item - Dashboard -->
  <li class="nav-item dropdown <?php if (uri_string() == 'pinjam/index' || strpos(uri_string(), 'pinjam/index') !== false || uri_string() == 'pinjam/daftarBooking' || strpos(uri_string(), 'pinjam/bookingDetail') !== false) echo 'active'; ?>">
    <a class="nav-link dropdown-toggle pb-0" href="#" id="dropdownTransaksi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-exchange-alt"></i>
      <span>Transaksi</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownTransaksi">
      <a class="dropdown-item <?php if (uri_string() == 'pinjam/index' || strpos(uri_string(), 'pinjam/index') !== false) echo 'active'; ?>" href="<?= base_url('pinjam/index'); ?>">
        <i class="fa fa-fw fa-shopping-cart"></i>
        <span>Data Peminjaman</span>
      </a>
      <a class="dropdown-item <?php if (uri_string() == 'pinjam/daftarBooking' || strpos(uri_string(), 'pinjam/bookingDetail') !== false) echo 'active'; ?>" href="<?= base_url('pinjam/daftarBooking'); ?>">
        <i class="fa fa-fw fa-calendar"></i>
        <span>Data Booking</span>
      </a>
    </div>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider mt-3">

  <!-- Heading -->
  <div class="sidebar-heading">
    Laporan
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <!-- Nav Item - Dashboard -->
  <li class="nav-item dropdown <?php if (uri_string() == 'laporan/laporan_buku' || strpos(uri_string(), 'laporan/laporan_buku') !== false || uri_string() == 'laporan/laporan_anggota' || strpos(uri_string(), 'laporan/laporan_anggota') !== false || uri_string() == 'laporan/laporan_pinjam' || strpos(uri_string(), 'laporan/laporan_pinjam') !== false) echo 'active'; ?>">
    <a class="nav-link dropdown-toggle pb-0" href="#" id="dropdownLaporan" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-fw fa-address-book"></i>
      <span>Laporan</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownLaporan">
      <a class="dropdown-item <?php if (uri_string() == 'laporan/laporan_buku' || strpos(uri_string(), 'laporan/laporan_buku') !== false) echo 'active'; ?>" href="<?= base_url('laporan/laporan_buku'); ?>">
        <i class="fa fa-fw fa-book"></i>
        <span>Laporan Data Buku</span>
      </a>
      <a class="dropdown-item <?php if (uri_string() == 'laporan/laporan_anggota' || strpos(uri_string(), 'laporan/laporan_anggota') !== false) echo 'active'; ?>" href="<?= base_url('laporan/laporan_anggota'); ?>">
        <i class="fa fa-fw fa-users"></i>
        <span>Laporan Data Anggota</span>
      </a>
      <a class="dropdown-item <?php if (uri_string() == 'laporan/laporan_pinjam' || strpos(uri_string(), 'laporan/laporan_pinjam') !== false) echo 'active'; ?>" href="<?= base_url('laporan/laporan_pinjam'); ?>">
        <i class="fa fa-fw fa-shopping-cart"></i>
        <span>Laporan Peminjaman</span>
      </a>
    </div>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider mt-3">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('autentifikasi/logout'); ?>">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Logout</span></a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar --   > 