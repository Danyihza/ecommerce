  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Ulasan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item active">Ulasan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Gambar Buku</th>
                      <th>Nama Buku</th>
                      <th>Rating Buku</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($ulasan as $j) { ?>
                      <tr>
                        <td align="center"><img src="<?= base_url('assets/'); ?>images/produk/<?= $j->gambar_produk; ?>" width="32" /></td>
                        <td><?= $j->nama_produk ?></td>
                        <td>
                          <li class="fas fa-star text-yellow"></li> <?= $j->rerata ?> (<?= $j->jml ?> Ulasan)
                        </td>
                        <td>
                          <?php if ($j->jml > 0) { ?>
                            <a title="Lihat Ulasan" href="<?= base_url('produk/lihatulasan/' . $j->id_produk); ?>" type="button" class="btn btn-warning fa fa-eye"></a>
                          <?php } else { ?>
                            <a title="Lihat Ulasan" href="<?= base_url('produk/lihatulasan/' . $j->id_produk); ?>" type="button" class="btn btn-warning fa fa-eye disabled"></a>
                          <?php } ?>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Gambar</th>
                      <th>Nama</th>
                      <th>Rating</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->