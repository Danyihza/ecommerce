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
              <li class="breadcrumb-item active">Upload Gambar Produk</li>
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
            <h3 class="card-title">Upload Gambar</h3>
          </div>
          <!-- /.card-header -->
          <?= $this->session->flashdata('notif') ?>
          <?= form_open_multipart('produk/uploadexcel'); ?>
          <div class="card-body">
            <div class="row">
              <div class="form-group">
                <label for="exampleInputEmail1">UNGGAH GAMBAR BUKU</label>
                <input type="file" name="userfile" class="form-control">
                <!-- <label class="custom-file-label" for="exampleInputFile">UNGGAH FILE EXCEL</label> -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success">UPLOAD</button>
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

            <?php foreach ($ulas as $u) { ?>
            <!-- /.col -->
            <div class="col-md-3">
              <div class="box box-warning box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Collapsable</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <?= $u->isi_ulasan; ?>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          <?php } ?>