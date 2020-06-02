  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Transaksi </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('order') ?>">Data Transaksi</a></li>
              <li class="breadcrumb-item active">Lihat Detail</li>
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
            <?php foreach ($transaksi as $t) { ?>
              <div class="card-title">
                <label for="exampleInputDiskon">No Transaksi <?= $t->id_transaksi; ?></label>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputDiskon">Tanggal: &nbsp;</label>
              <a><?= $t->tanggal_transaksi; ?></a>
            </div>
            <div class="form-group">
              <label for="exampleInputDiskon">Nama Pembeli: &nbsp;</label>
              <a><?= $t->nama_pembeli; ?></a>
            </div>
            <div class="form-group">
              <label for="exampleInputDiskon">No Telepon: &nbsp;</label>
              <a><?= $t->no_pembeli; ?></a>
            </div>
            <div class="form-group">
              <label for="exampleInputDiskon">Alamat Lengkap: </label>
              <a><?= $t->alamat_pembeli; ?>, <?= $t->kec_pembeli; ?>, <?= $t->kab_pembeli; ?>, <?= $t->prov_pembeli; ?></a>
            </div>
            <div class="form-group">
              <label for="exampleInputDiskon">Status: &nbsp;</label>
              <?php if($t->status_transaksi == 1) :?>
              <a class="badge badge-success">Valid</a>
              <?php elseif($t->status_transaksi == 2) :?>
              <a class="badge badge-danger">Tidak Valid</a>
              <?php else:?>
              <a class="badge badge-warning">Belum di Validasi</a>
              <?php endif; ?>
            </div>
          <?php } ?>
          <hr>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Harga</th>
                <th>Jumlah Buku</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($trans as $a) { ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $a->nama_produk ?></td>
                  <td>Rp <?= $a->harga_produk ?></td>
                  <td><?= $a->jumlah_produk ?></td>
                  <td>Rp <?= $a->subtotal ?></td>
                </tr>
              <?php } ?>
              <tr>
                <td colspan="4"><strong>Total Harga</strong></td>
                <td><strong>Rp <?= $t->total ?></strong></td>
              </tr>
            </tbody>
          </table>
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