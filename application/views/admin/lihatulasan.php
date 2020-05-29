  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rating Buku </h1>
            <?php foreach ($rating as $r) { ?>
              <li class="fas fa-star text-yellow"></li> <?= $r->rerata ?> (<?= $r->jml ?> Ulasan)
            <?php } ?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('produk/ulasanview') ?>">Data Ulasan</a></li>
              <li class="breadcrumb-item active">Lihat Ulasan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Data Ulasan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <?php foreach ($ulas as $u) { ?>
                <!-- /.col -->
                <div class="col-md-3">
                  <div class="card card-warning">
                    <div class="card-header">
                      <h3 class="card-title"><?= $u->nama_ulasan; ?></h3>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <li class="fas fa-star text-yellow"></li> <?= $u->rating_ulasan; ?>
                      <hr>
                      <?= $u->isi_ulasan; ?>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              <?php } ?>
              <!-- /.row -->
            </div>
            <div class="card-footer">
            </div>
            </form>
            <!-- /.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->