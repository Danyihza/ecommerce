  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('admin') ?>" class="brand-link">
          <img src="<?= base_url('assets/adminlte/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Ar Raihan</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="<?= base_url('assets/adminlte/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block"><?php echo  $this->session->userdata("nama") ?></a>
                  <a href="<?php echo base_url() ?>/auth/logout" class="d-block"><i class="fas fa-sign-out-alt text-danger"></i> Logout</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills  nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item has-treeview ">
                      <a href="<?= base_url('admin') ?>" class="nav-link ">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-header">PRODUK</li>
                  <li class="nav-item">
                      <a href="<?= base_url('produk') ?>" class="nav-link">
                          <i class="nav-icon fas fa-table"></i>
                          <p>
                              Data Produk
                              <span class="badge badge-info right"><?= $countproduk; ?></span>
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('produk/excelview') ?>" class="nav-link">
                          <i class="nav-icon fas fa-upload"></i>
                          <p>
                              Tambah Data Excel
                          </p>
                      </a>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="<?= base_url('produk/gambarview') ?>" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Upload Gambar Produk
                          </p>
                      </a>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="<?= base_url('produk/ulasanview') ?>" class="nav-link">
                          <i class="nav-icon far fa-star"></i>
                          <p>
                              Ulasan Produk
                          </p>
                      </a>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="<?= base_url('produk/subview') ?>" class="nav-link">
                          <i class="nav-icon far fa-user"></i>
                          <p>
                              Subscriber
                          </p>
                      </a>
                  </li>
                  <li class="nav-header">TRANSAKSI</li>
                  <li class="nav-item">
                      <a href="<?= base_url('order') ?>" class="nav-link">
                          <i class="fas fa-shopping-cart nav-icon"></i>
                          <p>Data Transaksi</p>
                      </a>
                  </li>
                  <li class="nav-header">BLOG</li>
                  <li class="nav-item">
                      <a href="<?= base_url('BlogAdmin') ?>" class="nav-link">
                          <i class="nav-icon fas fa-bold"></i>
                          <p>Data Artikel</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('admin') ?>" class="nav-link">
                          <i class="nav-icon fas fa-comment"></i>
                          <p>Komentar</p>
                      </a>
                  </li>
                  <li class="nav-header">REKAP</li>
                  <li class="nav-item">
                      <a href="<?= base_url('admin') ?>" class="nav-link">
                          <i class="fas fa-file nav-icon"></i>
                          <p>Rekap Data Produk</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('admin') ?>" class="nav-link">
                          <i class="fas fa-print nav-icon"></i>
                          <p>Rekap Data Transaksi</p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>