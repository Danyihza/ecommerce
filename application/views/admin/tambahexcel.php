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
              <li class="breadcrumb-item active">Tambah Produk Excel</li>
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
          <a href="download"><button align="right" class="btn btn-primary"><i class="fas fa-download"></i>   DOWNLOAD TEMPLATE EXCEL</button></a>
          </div>
          <!-- /.card-header -->
          <?= $this->session->flashdata('notif') ?>
          <?= form_open_multipart('produk/uploadexcel'); ?>
          <div class="card-body">
            <div class="row">
              <div class="form-group">
                <label for="exampleInputEmail1">UNGGAH FILE EXCEL</label>
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