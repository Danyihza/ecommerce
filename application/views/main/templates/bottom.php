

 <script src="<?= base_url('assets/ckeditor/'); ?>ckeditor.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>styles/bootstrap4/popper.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>styles/bootstrap4/bootstrap.min.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>plugins/greensock/TweenMax.min.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>plugins/greensock/TimelineMax.min.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>plugins/greensock/animation.gsap.min.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>plugins/greensock/ScrollToPlugin.min.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>plugins/slick-1.8.0/slick.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>plugins/easing/easing.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>plugins/Isotope/isotope.pkgd.min.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>plugins/parallax-js-master/parallax.min.js"></script>
 <script src="<?= base_url('assets/templates/'); ?>js/custom.js"></script>
 <!-- <script src="<?= base_url('assets/templates/'); ?>js/shop_custom.js"></script> -->

 <script>
     $('.carousel').carousel()
 </script>

 <script>
     $('.my-banner').owlCarousel({
         loop: true,
         margin: 10,
         nav: true,
         responsive: {
             0: {
                 items: 1
             },
             600: {
                 items: 3
             },
             1000: {
                 items: 5
             }
         }
     })
 </script>

 <?php if ($this->session->flashdata('toast')) : ?>
     <script>
         $(document).ready(function() {
             const Toast = Swal.mixin({
                 toast: true,
                 position: 'top-end',
                 showConfirmButton: false,
                 timer: 3000,
                 timerProgressBar: false,
                 onOpen: (toast) => {
                     toast.addEventListener('mouseenter', Swal.stopTimer)
                     toast.addEventListener('mouseleave', Swal.resumeTimer)
                 }
             })


             Toast.fire({
                 icon: 'success',
                 title: 'Ditambahkan ke Keranjang'
             })
         });
     </script>
 <?php endif; ?>

 <script>
     $(document).ready(function() {
         $('.add_cart').click(function() {
             var produk_id = $(this).data("id_produk");
             var produk_nama = $(this).data("nama_produk");
             var produk_harga = $(this).data("harga_produk");
             var produk_gambar = $(this).data("gambar_produk");
             $.ajax({
                 url: "<?php echo base_url(); ?>main/add_to_cart",
                 method: "POST",
                 data: {
                     produk_id: produk_id,
                     produk_nama: produk_nama,
                     produk_harga: produk_harga,
                     produk_gambar: produk_gambar,
                     quantity: 1
                 },
                 success: function(data) {
                     $('#detail_cart').html(data);
                     location.reload();
                 }
             });
         });

         // Load shopping cart
         $('#detail_cart').load("<?php echo base_url(); ?>main/load_cart");

         //Hapus Item Cart
         $(document).on('click', '.hapus_cart', function() {
             var row_id = $(this).attr("id"); //mengambil row_id dari artibut id
             $.ajax({
                 url: "<?php echo base_url(); ?>main/hapus_cart",
                 method: "POST",
                 data: {
                     row_id: row_id
                 },
                 success: function(data) {
                     $('#detail_cart').html(data);
                     location.reload();
                 }
             });
         });

         //Update Item Cart
         $(document).on('change', '.kuantitas', function() {
             var row_id = $(this).attr('id');
             var qty = $(this).val();
             $.ajax({
                 url: "<?php echo base_url(); ?>main/update_cart",
                 method: "POST",
                 data: {
                     row_id: row_id,
                     qty: qty
                 },
                 success: function(data) {
                     $('#detail_cart').html(data);
                 }
             })
         })

     });
 </script>

 <?php if ($this->session->flashdata('modal')) : ?>
     <script>
         $(document).ready(function() {
             $('#staticBackdrop').modal('show');
         })
     </script>
 <?php endif ?>

 <script>
     $(document).ready(function() {
         $('#tmbllanjut').on('click', function() {
             $('#tmbllanjut').attr('disabled', 'disabled');
             $('#tmbllanjut').attr('class', 'btn btn-grey col-12');
             $('#pemesanan').html(`
                        <hr>
                        <form action="<?= base_url('main/checkout') ?>" method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" id="nama_lengkap" autofocus required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Provinsi</label>
                                    <select style="color:black;" class="form-control" id="input_provinsi" onchange="document.getElementById('provinsi1').value=this.options[this.selectedIndex].text">
                                        <option disabled selected>Silahkan Pilih Provinsi</option>
                                    </select>
                                    <input type="hidden" name="provinsi" id="provinsi1" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Kab/Kota</label>
                                    <select disabled="true" style="color:black;" class="form-control" id="input_kabkota" onchange="document.getElementById('kabkota1').value=this.options[this.selectedIndex].text">
                                        <option disabled selected>Silahkan Pilih Kota</option>
                                    </select>
                                    <input type="hidden" name="kabkota" id="kabkota1" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Kecamatan</label>
                                    <select disabled="true" style="color:black;" class="form-control" name="kecamatan" id="input_kecamatan" onchange="document.getElementById('kecamatan1').value=this.options[this.selectedIndex].text">
                                        <option disabled selected>Silahkan Pilih Kecamatan</option>
                                    </select>
                                    <input type="hidden" name="kecamatan" id="kecamatan1" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">No. Whatsapp</label>
                                    <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">Catatan</h4>
                                <p>Total harga + ongkir yang harus dibayar akan diinformasikan oleh admin Media Al-Faruq, setelah mengirim data pesanan.</p>
                            </div>
                                <button type="submit" onclick="return confirm('Data yang anda isi sudah benar ?')" id="checkout" class="btn btn-primary col-md-12"><img src="<?= base_url('assets/images/icon/'); ?>icons8-whatsapp-24.png" width="20px" alt=""> Pesan Sekarang</button>
                        </form>
                        `)
         })

     })
 </script>

 <script>
     $('#tmbllanjut').on('click', function() {
         $.ajax({
             url: '<?= base_url('API/getProvinsiAPI') ?>',
             method: 'GET',
             dataType: 'json',
             success: function(data) {
                 const result = data.provinsi;
                 console.log(result);
                 $('#input_provinsi').attr('disabled', false);
                 $.each(result, function(i, value) {
                     $('#input_provinsi').append('<option value="' + value.id + '">' + value.nama + '</option>')
                 });
                 $('#input_provinsi').change(function() {
                     $('#input_kabkota').attr('disabled', false);
                     $('#input_kecamatan').attr('disabled', true);
                     $('#input_kabkota').html('<option disabled selected>Silahkan Pilih Kota</option>');
                     $('#input_kecamatan').html('<option disabled selected>Silahkan Pilih Kecamatan</option>');
                     var provinsi = $(this).val();
                     console.log(provinsi);
                     $.ajax({
                         url: '<?= base_url('API/getKabKotaAPI/') ?>' + provinsi,
                         method: 'GET',
                         dataType: 'json',
                         success: function(data) {
                             const result = data.kota_kabupaten;
                             console.log(result);
                             $.each(result, function(i, value) {
                                 $('#input_kabkota').append('<option value="' + value.id + '">' + value.nama + '</option>')
                             });
                             $('#input_kabkota').change(function() {
                                 $('#input_kecamatan').attr('disabled', false);
                                 $('#input_kecamatan').html('<option disabled selected>Silahkan Pilih Kecamatan</option>');
                                 const kab_kota = $(this).val();
                                 console.log(kab_kota);
                                 $.ajax({
                                     url: '<?= base_url('API/getKecamatanAPI/') ?>' + kab_kota,
                                     method: 'GET',
                                     dataType: 'json',
                                     success: function(data) {
                                         const result = data.kecamatan;
                                         console.log(result);
                                         $.each(result, function(i, value) {
                                             $('#input_kecamatan').append('<option value="' + value.id + '">' + value.nama + '</option>')
                                         });
                                     }
                                 })
                             })

                         }
                     })
                 })
             }
         })
     });
 </script>


 </body>

 </html>