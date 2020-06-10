  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Subscriber</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
                          <li class="breadcrumb-item active">Subscriber</li>
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
                              <a href="<?= base_url('email/send'); ?>"><button align="right" onclick="return konfirm()" class="btn btn-primary"><i class="fas fa-upload"></i> Kirim Email Produk Baru</button></a>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <?= $this->session->flashdata('notif') ?>
                              <table id="example1" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Email</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $no = 1;
                                        foreach ($datas as $d) { ?>
                                          <tr>
                                              <td><?= $no++; ?></td>
                                              <td><?= $d->email_subscriber; ?></td>
                                              <td>
                                                  <a title="Hapus" href="<?= base_url('produk/hapusl/' . $d->id_subscriber); ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" type="button" class="btn btn-danger fa fa-trash"></a>
                                              </td>
                                          </tr>
                                      <?php } ?>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>No</th>
                                          <th>Email</th>
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