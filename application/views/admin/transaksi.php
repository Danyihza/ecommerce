  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Produk</li>
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
                <a href="<?= base_url('produk/tambahproduk') ?>"><button align="right" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah Data</button></a>
                <button align="right" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#kategori"><i class="fas fa-list"> </i> Kategori</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?= $this->session->flashdata('notif') ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Action</th>
                      <th>Gambar</th>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Kategori</th>
                      <th>Diskon</th>
                      <th>Harga Final</th>
                      <th>Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($produk as $a) { ?>
                      <tr>
                        <td>
                          <a title="Edit" href="<?= base_url('produk/ubahview/' . $a->id_produk); ?>" type="button" class="btn btn-primary fa fa-edit"></a>
                          <a title="Hapus" href="<?= base_url('produk/hapus/' . $a->id_produk); ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" type="button" class="btn btn-danger fa fa-trash"></a>
                        </td>
                        <td align="center"><img src="<?= base_url('assets/'); ?>images/produk/<?= $a->gambar_produk; ?>" width="32" /></td>
                        <td><?= $a->nama_produk ?></td>
                        <td><?= "Rp " . number_format($a->harga_produk, 0, ',', '.') ?></td>
                        <td>
                          <?= $a->stok_produk ?>
                          <a title="Update Stok" href="#" type="button" class="fa fa-edit text-warning" data-toggle="modal" data-target="#stok<?= $a->id_produk ?>"></a>
                        </td>
                        <td><?= $a->nama_kategori ?></td>
                        <td>
                          <?= $a->diskon_produk ?>% 
                          <a title="Ubah Diskon" href="#" type="button" class="fa fa-edit text-warning" data-toggle="modal" data-target="#diskon<?= $a->id_produk ?>"></a>
                        </td>
                        <td><?= "Rp " . number_format(($a->harga_produk - ($a->harga_produk * ($a->diskon_produk / 100))), 0, ',', '.') ?></td>
                        <td><?= $a->desk_produk ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Action</th>
                      <th>Gambar</th>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Kategori</th>
                      <th>Diskon</th>
                      <th>Harga Final</th>
                      <th>Deskripsi</th>
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

  <!-- modal stok data -->
  <?php foreach ($produk as $a) { ?>
    <div class="modal fade" id="stok<?= $a->id_produk ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg-3" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mediumModalLabel"><strong>Stok <?= $a->nama_produk ?></strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?= form_open_multipart('produk/updatestok/'.$a->id_produk); ?>
            <div class="form-group">
              <label for="exampleInputDiskon">Stok Buku</label>
              <input class="form-control" type="number" name="stok_produk" placeholder="Masukkan Stok" value="<?= $a->stok_produk ?>" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Tambah">
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <!-- modal stok data -->

    <!-- modal diskon data -->
    <?php foreach ($produk as $a) { ?>
    <div class="modal fade" id="diskon<?= $a->id_produk ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg-3" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mediumModalLabel"><strong>Diskon <?= $a->nama_produk ?></strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?= form_open_multipart('produk/updatediskon/'.$a->id_produk); ?>
            <div class="form-group">
              <label for="exampleInputDiskon">Diskon Buku</label>
              <input class="form-control" type="number" name="diskon_produk" placeholder="Masukkan Diskon" value="<?= $a->diskon_produk ?>" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Tambah">
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <!-- modal diskon data -->

  <!-- modal kategori data -->
  <div class="modal fade" id="kategori" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg-8" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mediumModalLabel"><strong>Kategori</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID Kategori</th>
                <th>Kategori</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($kategori as $k) { ?>
                <tr>
                  <td><?= $k['id_kategori']; ?></td>
                  <td><?= $k['nama_kategori']; ?></td>
                  <td>
                    <a title="Hapus" href="<?= base_url('produk/hapuskat/' . $k['id_kategori']); ?>" type="button" class="btn btn-danger fa fa-trash"></a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <?= form_open_multipart('produk/tambahkat'); ?>
          <div class="form-group">
            <div class="input-group">
              <input class="form-control" name="nama_kategori" placeholder="Masukkan Kategori" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <input type="submit" class="btn btn-primary" value="Tambah">
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- modal kategori data -->