<!-- Copyright -->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                    <div class="copyright_content">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="logos ml-sm-auto">
                        <ul class="logos_list">
                            <li><a href="#"><img src="<?= base_url('assets/templates/'); ?>images/logos_1.png" alt=""></a></li>
                            <li><a href="#"><img src="<?= base_url('assets/templates/'); ?>images/logos_2.png" alt=""></a></li>
                            <li><a href="#"><img src="<?= base_url('assets/templates/'); ?>images/logos_3.png" alt=""></a></li>
                            <li><a href="#"><img src="<?= base_url('assets/templates/'); ?>images/logos_4.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="<?= base_url('assets/templates/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>styles/bootstrap4/popper.js"></script>
<script src="<?= base_url('assets/templates/'); ?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/easing/easing.js"></script>
<script src="<?= base_url('assets/templates/'); ?>js/blog_single_custom.js"></script>

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
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Provinsi</label>
                                    <select class="form-control" name="provinsi" id="exampleFormControlSelect1">
                                        <option>Jawa Timur</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Kab/Kota</label>
                                    <select style="color:black;" name="kota" class="form-control" id="exampleFormControlSelect1">
                                        <option>Kab. Probolinggo</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Kecamatan</label>
                                    <select class="form-control" name="kecamatan" id="exampleFormControlSelect1">
                                        <option>Kraksaan</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">No. Whatsapp</label>
                                    <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                                <button type="submit" id="checkout" class="btn btn-primary col-md-12">Checkout</button>
                        </form>
                        `)
        })

    })
</script>