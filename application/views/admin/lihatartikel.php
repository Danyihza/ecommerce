  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lihat Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('BlogAdmin') ?>">Data Artikel</a></li>
              <li class="breadcrumb-item active">Lihat Artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Box Comment -->
            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <img class="img-circle" src="<?= base_url('assets/'); ?>images/blog/<?= $artikel['foto_artikel']; ?>" alt="User Image">
                  <span class="username"><a href="#"><?= $artikel['judul_artikel']; ?></a></span>
                  <span class="description">Diperbaharui - <?= time_elapsed_string('@' . $artikel['tanggal_artikel']); ?></span>
                </div>
                <!-- /.user-block -->
                <div class="card-tools">
                  <span class="float-right text-muted"><?= $count['jmlkmn']; ?> Komentar</span>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- post text -->
                <?= $artikel['isi_artikel']; ?>

              </div>
              <!-- /.card-body -->
              <div class="card-footer card-comments">
                <?php foreach ($komentar1 as $k) : ?>
                  <div class="card-comment">
                    <div class="comment-parent">
                      <span class="username">
                        <?= $k->nama_kmn; ?>
                        <span class="text-muted"><i>(<?= $k->email_kmn; ?>)</i></span>
                        <span class="text-muted float-right"><?= time_elapsed_string($k->waktu_kmn); ?></span>
                      </span><!-- /.username -->
                      <?= $k->isi_kmn; ?>
                    </div>
                    <?php
                    $id_artikel = $k->id_artikel;
                    $id_kmn = $k->id_kmn;
                    ?>
                    <button type="button" class="btn btn-sm btn-grey" data-toggle="modal" data-target="#komen<?= $id_kmn ?>">Balas</button>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.card-comment -->
                  <?php
                  $query = $this->db->query("select * from komentar where id_artikel=$id_artikel and status_kmn=$id_kmn");
                  foreach ($query->result() as $km) : ?>
                    <div class="card-comment">
                      <div class="comment-child">
                        <span class="username">
                          <?= $km->nama_kmn; ?>
                          <span class="text-muted"><i>(<?= $km->email_kmn; ?>)</i></span>
                          <span class="text-muted float-right"><?= time_elapsed_string($km->waktu_kmn); ?></span>
                        </span><!-- /.username -->
                        <?= $km->isi_kmn; ?>
                      </div>
                      <!-- /.comment-text -->
                    </div>
                  <?php endforeach; ?>
                  <!-- /.card-comment -->
                <?php endforeach; ?>
              </div>
              <!-- /.card-footer -->
              <div class="card-footer">
                <?= form_open_multipart('BlogAdmin/kirimkomen'); ?>
                <div class="img-push">
                  <input hidden type="text" name="nama_kmn" value="Media Ar-Raihan">
                  <input hidden type="text" name="email_kmn" value="Administrator">
                  <input hidden type="text" name="status_kmn" value="0">
                  <input hidden type="text" name="id_artikel" value="<?= $artikel['id_artikel']; ?>">
                  <input type="text" name="isi_kmn" class="form-control form-control-sm" placeholder="Press enter to post comment">
                  <input hidden type="submit" value="Kirim" class="form-control form-control-sm">
                </div>
                </form>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php foreach ($komentar1 as $k) : ?>
    <!-- modal balas data -->
    <?php
    $id_artikel = $k->id_artikel;
    $id_kmn = $k->id_kmn;
    ?>
    <div class="modal fade" id="komen<?= $id_kmn ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg-3" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mediumModalLabel"><strong>Balas Komentar <?= $k->id_kmn ?></strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?= form_open_multipart('BlogAdmin/kirimbalas/'); ?>
            <input hidden type="text" name="nama_kmn" value="Media Ar-Raihan">
            <input hidden type="text" name="email_kmn" value="Administrator">
            <input hidden type="text" name="status_kmn" value="<?= $id_kmn; ?>">
            <input hidden type="text" name="id_artikel" value="<?= $artikel['id_artikel']; ?>">
            <input type="text" name="isi_kmn" class="form-control form-control-sm" placeholder="Press enter to post comment">
            <input hidden type="submit" value="Kirim" class="form-control form-control-sm">
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  <!-- modal diskon data -->