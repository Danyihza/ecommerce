  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Transaksi</li>
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
                <?= $this->session->flashdata('notif') ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No Transaksi</th>
                      <th>Tanggal</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No Telepon</th>
                      <th>Alamat</th>
                      <th>Kec, Kab/Kota</th>
                      <th>Provinsi</th>
                      <th>Detail</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($transaksi as $a) { ?>
                      <tr>
                        <td><?= $a->id_transaksi ?></td>
                        <td><?= $a->tanggal_transaksi ?></td>
                        <td><?= $a->nama_pembeli ?></td>
                        <td><?= $a->email_pembeli ?></td>
                        <td><?= $a->no_pembeli ?></td>
                        <td><?= $a->alamat_pembeli ?></td>
                        <td><?= $a->kec_pembeli ?>, <?= $a->kab_pembeli ?></td>
                        <td><?= $a->prov_pembeli ?></td>
                        <td align="center">
                          <a title="Lihat Detail" href="<?= base_url('order/lihatdetail/' . $a->id_transaksi); ?>" type="button" class="fa fa-2x fa-eye text-warning"></a>
                        </td>
                        <td align="center">
                          <?php if ($a->status_transaksi == 0) { ?>
                            Proses<br>
                            <a title="Tidak Valid" href="#" type="button" class="fa fa-2x fa-window-close text-danger"></a>
                            <a title="Valid" href="#" type="button" class="fa fa-2x fa-check-square text-success"></a>
                          <?php } else if ($a->status_transaksi == 1) { ?>
                            <a title="Selesai" href="#" type="button" class="btn btn-sm btn-success">Valid</a>
                          <?php } else if ($a->status_transaksi == 2) { ?>
                            <a href="#" class="text-danger" disabled>Tidak Valid</a>
                          <?php } ?>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No Transaksi</th>
                      <th>Tanggal</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No Telepon</th>
                      <th>Alamat</th>
                      <th>Kec, Kab/Kota</th>
                      <th>Provinsi</th>
                      <th>Detail</th>
                      <th>Status</th>
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