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
              <li class="breadcrumb-item"><a href="<?= base_url('BlogAdmin') ?>">Data Artikel</a></li>
              <li class="breadcrumb-item active">Ubah Artikel</li>
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
            <h3 class="card-title">Ubah Data</h3>
          </div>
          <!-- /.card-header -->
          <?php $now = date('Y-m-d'); ?>
          <?= form_open_multipart('BlogAdmin/update'); ?>
          <div class="card-body">
            <div class="form-group" align="center">
              <img src="<?= base_url('assets/'); ?>images/blog/<?= $artikel['foto_artikel']; ?>" width="64" />
            </div>
            <input hidden type="text" class="form-control" name="id_artikel" value="<?= $artikel['id_artikel']; ?>">
            <div class="form-group">
              <label for="exampleInputNama">Judul Artikel</label>
              <input type="text" class="form-control" name="judul_artikel" value="<?= $artikel['judul_artikel']; ?>" placeholder="Masukkan Judul Artikel" required>
            </div>
            <div class="form-group">
              <label for="exampleInputHarga">Tanggal</label>
              <input type="date" class="form-control" name="tanggal_artikel" value="<?= $now; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Gambar Artikel</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" value="<?= $artikel['foto_artikel']; ?>" name="foto_artikel">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Isi Artikel</label>
              <textarea id="editor1" name="isi_artikel" rows="10" cols="80"><?= $artikel['isi_artikel']; ?></textarea>
            </div>
            <!-- /.form-group -->
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
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