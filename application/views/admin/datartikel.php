  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Artikel</li>
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
                <a href="<?= base_url('BlogAdmin/tambahview') ?>"><button align="right" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?= $this->session->flashdata('notif') ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Action</th>
                      <th>ID Artikel</th>
                      <th>Gambar Artikel</th>
                      <th>Judul Artikel</th>
                      <th>Tanggal Terbit</th>
                      <th>Status Artikel</th>
                      <th>Jumlah Komentar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($artikel as $a) { ?>
                      <tr>
                        <td>
                          <a title="Lihat" href="<?= base_url('BlogAdmin/lihatartikel/' . $a->id_artikel); ?>" type="button" class="btn btn-warning fa fa-eye"></a>
                          <a title="Edit" href="<?= base_url('BlogAdmin/updateview/' . $a->id_artikel); ?>" type="button" class="btn btn-primary fa fa-edit"></a>
                          <a title="Hapus" href="<?= base_url('BlogAdmin/hapus/' . $a->id_artikel); ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" type="button" class="btn btn-danger fa fa-trash"></a>
                        </td>
                        <td><?= $a->id_artikel ?></td>
                        <td align="center"><img src="<?= base_url('assets/'); ?>images/blog/<?= $a->foto_artikel; ?>" width="32" /></td>
                        <td><?= $a->judul_artikel ?></td>
                        <td><?= date("d/m/Y",$a->tanggal_artikel) ?></td>
                        <td>
                          <?php if ($a->status_artikel == 0) { ?>
                            <a title="Aktifkan?" href="<?= base_url('BlogAdmin/aktif/' . $a->id_artikel); ?>" type="button" class="btn btn-sm btn-danger">Nonaktif</a>
                          <?php } else { ?>
                            <a title="Nonaktifkan?" href="<?= base_url('BlogAdmin/nonaktif/' . $a->id_artikel); ?>" type="button" class="btn btn-sm btn-success">Aktif</a>
                          <?php } ?>
                        </td>
                        <td class="text-danger"><strong><?= $a->jml ?> Komentar</strong></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Action</th>
                      <th>ID Artikel</th>
                      <th>Gambar Artikel</th>
                      <th>Judul Artikel</th>
                      <th>Tanggal Terbit</th>
                      <th>Status Artikel</th>
                      <th>Jumlah Komentar</th>
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