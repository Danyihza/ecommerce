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
              <li class="breadcrumb-item"><a href="<?= base_url('produk') ?>">Data Produk</a></li>
              <li class="breadcrumb-item active">Ubah Produk</li>
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
          <?= form_open_multipart('produk/update'); ?>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group" align="center">
                  <img src="<?= base_url('assets/'); ?>images/produk/<?= $produk['gambar_produk']; ?>" width="64" />
                </div>
                <input hidden type="text" class="form-control" name="id_produk" value="<?= $produk['id_produk']; ?>">
                <div class="form-group">
                  <label for="exampleInputNama">Nama Buku</label>
                  <input type="text" class="form-control" name="nama_produk" value="<?= $produk['nama_produk']; ?>" placeholder="Masukkan Nama Buku" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputHarga">Harga Buku</label>
                  <input type="number" class="form-control" name="harga_produk" value="<?= $produk['harga_produk']; ?>" placeholder="Masukkan Harga Buku" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputStok">Stok Buku</label>
                  <input type="number" class="form-control" name="stok_produk" value="<?= $produk['stok_produk']; ?>" placeholder="Masukkan Stok Buku" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputDiskon">Diskon Buku</label>
                  <input type="number" class="form-control" name="diskon_produk" value="<?= $produk['diskon_produk']; ?>" placeholder="Masukkan Diskon Buku">
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="kategori">
                    <option selected value="<?= $produk['kategori']; ?>"><?= $produk['nama_kategori']; ?></option>
                    <?php foreach ($kategori as $k) { ?>
                      <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Gambar Buku</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" value="<?= $produk['gambar_produk']; ?>" id="exampleInputFile" name="gambar_produk">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi</label>
                  <textarea id="editor1" name="desk_produk" value="<?= $produk['desk_produk']; ?>" rows="10" cols="80"><?= $produk['desk_produk']; ?></textarea>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
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