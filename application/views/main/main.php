<!-- Banner -->

<!-- <div class="banner">
    <div class="banner_background" style="background-image:url(http://localhost/ecommerce/assets/templates/images/924.jpg)"></div>
    <div class="container fill_height">
        <div class="row fill_height">
            <div class="banner_product_image"><img class="produk_banner" src="<?= base_url('assets/'); ?>images/<?= $newproduk['gambar_produk']; ?>" width="300"></div>
            <div class="col-lg-5 offset-lg-4 fill_height">
                <div class="banner_content">
                    <h1 class="banner_text" style="color:#000000;"></h1>
                    <?php if ($newproduk['diskon_produk']) : ?>
                        <div class="banner_price">Rp <?= number_format(($newproduk['harga_produk'] - ($newproduk['harga_produk'] * ($newproduk['diskon_produk'] / 100))), '0', ',', '.'); ?><span style="color:black;"><s>Rp 525.000</s></span></div>
                    <?php else : ?>
                        <div class="banner_price">Rp <?= number_format($newproduk['harga_produk'], 0, '.', '.'); ?></div>
                    <?php endif; ?>
                    <div class="banner_product_name"><?= $newproduk['nama_produk']; ?></div>
                    <div class="button banner_button coklat"><a href="<?= base_url('main/produk/') . $newproduk['link']; ?>">Beli Sekarang</a></div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<!-- SLIDESHOW -->

<div id="carouselExampleIndicators" class="carousel slide bannerku" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url() ?>assets/templates/images/924.jpg" width="100%" alt="Second slide">
            <div class="button banner_button coklat banner-button"><a href="<?= base_url('main/produk/') . $newproduk['link']; ?>">Beli Sekarang</a></div>
            <img class="produk_banner banner-gambar" src="<?= base_url() ?>assets/images/<?= $newproduk['gambar_produk'] ?>" width="80px">
            <h5 class="banner-title"><b>New Arrival !</b></h5>
            <p class="banner-judul" style="color: #6f472d;"><?= $newproduk['nama_produk']; ?></p>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url() ?>assets/templates/images/924.jpg" width="100%" alt="Second slide">
            <div class="button banner_button coklat banner-button"><a>Beli Sekarang</a></div>
            <img class="produk_banner banner-gambar" src="<?= base_url() ?>assets/images/foto_cover.jpg" width="80px">
            <h5 class="banner-title"><b>New Arrival !</b></h5>
            <p class="banner-judul" style="color: #6f472d;">Harry Potter</p>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url() ?>assets/templates/images/924.jpg" width="100%" alt="Second slide">
            <div class="button banner_button coklat banner-button"><a>Beli Sekarang</a></div>
            <img class="produk_banner banner-gambar" src="<?= base_url() ?>assets/images/foto_cover.jpg" width="80px">
            <h5 class="banner-title"><b>New Arrival !</b></h5>
            <p class="banner-judul" style="color: #6f472d;">Harry Potter</p>
        </div>
    </div>
    <!-- <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost/ecommerce/assets/templates/images/924.jpg" width="90px" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost/ecommerce/assets/templates/images/924.jpg" width="90px" alt="Third slide">
        </div> -->
    <!-- </div> -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- END SLIDESHOW -->

<!-- <hr class="batas"> -->

<!-- Characteristics -->

<!-- <div class="characteristics">
    <div class="container">
        <div class="row justify-content-center">

            Char. Item
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex  align-items-center justify-content-start">
                    <div class="char_icon"><img src="<?= base_url('assets/images/'); ?>icon/icons8-whatsapp-96.png" width="40"></div>
                    <div class="char_content">
                        <div class="char_title">Tanpa Login</div>
                        <div class="char_subtitle">Order via Whatsapp</div>
                    </div>
                </div>
            </div>

            Char. Item
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex  align-items-center justify-content-start">
                    <div class="char_icon"><img src="images/char_2.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Free Delivery</div>
                        <div class="char_subtitle">from $50</div>
                    </div>
                </div>
            </div>

            Char. Item
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex  align-items-center justify-content-start">
                    <div class="char_icon"><img src="images/char_3.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Free Delivery</div>
                        <div class="char_subtitle">from $50</div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div> -->


<!-- <hr class="batas"> -->

<!-- List New Produk -->
<!-- <div class="shop_content">
    <div class="product_grid">
        <div class="product_grid_border"></div> -->

<?php foreach ($products as $pro) : ?>
    <!-- Product Item
            <div class="product_item is_new">
                <div class="product_border"></div>
                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url('assets/images/') . $pro['gambar_produk'] ?>" width="100px" alt="foto produk"></div>
                <div class="product_content">
                    <div class="product_price">Rp <?= number_format($pro['harga_produk'], '0', ',', '.'); ?></div>
                    <div class="product_name">
                        <div><a href="<?= base_url('main/produk/') . $pro['link'] ?>" tabindex="0"><?= $pro['nama_produk']; ?></a></div>
                    </div>
                </div>
                <div class="product_fav"><i class="fas fa-heart"></i></div>
                <ul class="product_marks">
                    <li class="product_mark product_new">new</li>
                </ul>
            </div> -->
<?php endforeach; ?>

<!-- </div>
</div> -->
<!-- End List New Produk -->

<!-- Hot New Arrivals -->

<div class="new_arrivals produk-baru-web">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabbed_container">
                    <div class="tabs clearfix tabs-right">
                        <div class="new_arrivals_title">Buku Terbaru</div>
                        <ul class="clearfix">
                            <li class="active">Sedang Diskon</li>
                        </ul>
                        <div class="tabs_line"><span></span></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9" style="z-index:1;">

                            <!-- Product Panel -->
                            <div class="product_panel panel active">
                                <div class="arrivals_slider slider">
                                    <?php foreach ($products as $product) : ?>
                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url('assets/images/produk/') . $product['gambar_produk'] ?>" width="90px" alt="cover buku"></div>
                                                <div class="product_content">
                                                    <?php if ($product['diskon_produk'] > 0) : ?>
                                                        <div class="product_price">Rp. <?= number_format(($product['harga_produk'] - ($product['harga_produk'] * ($product['diskon_produk'] / 100))), '0', ',', '.'); ?><span><s>Rp <?= number_format($product['harga_produk'], '0', ',', '.'); ?></s></span></div>
                                                    <?php else : ?>
                                                        <div class="product_price">Rp. <?= number_format($product['harga_produk'], '0', ',', '.'); ?></div>
                                                    <?php endif; ?>
                                                    <div class="product_name">
                                                        <div><a href="<?= base_url('main/produk/') . $product['link'] ?>"><?= $product['nama_produk']; ?></a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <button class="add_cart product_cart_button" data-id_produk="<?= $product['id_produk']; ?>" data-nama_produk="<?= $product['nama_produk'] ?>" data-harga_produk="<?php if ($product['diskon_produk'] == 0) {
                                                                                                                                                                                                                                echo $product['harga_produk'];
                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                echo ($product['harga_produk'] - ($product['harga_produk'] * ($product['diskon_produk'] / 100)));
                                                                                                                                                                                                                            } ?>" data-gambar_produk="<?= $product['gambar_produk'] ?>">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <ul class="product_marks">
                                                    <?php if ($product['diskon_produk'] > 0) : ?>
                                                        <li class="product_mark product_new" style="background: #df3b3b">-<?= $product['diskon_produk'] ?>%</li>
                                                    <?php else : ?>
                                                        <li class="product_mark product_new">baru</li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="arrivals_slider_dots_cover"></div>
                            </div>

                        </div>

                        <div class="col-lg-3">
                            <div class="arrivals_single clearfix">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <div class="arrivals_single_image text-center"><img src="<?= base_url('assets/images/produk/') . $diskon['gambar_produk'] ?>" width="120px" alt=""></div>
                                    <div class="arrivals_single_content">
                                        <div class="arrivals_single_category"><a href="#"><?= $diskon['nama_kategori']; ?></a></div>
                                        <div class="arrivals_single_name_container clearfix">
                                            <div class="arrivals_single_name"><a href="#"><?= $diskon['nama_produk']; ?></a></div>
                                            <!-- <div class="arrivals_single_price text-left"></div> -->
                                        </div>
                                        <div class="bestsellers_price discount">Rp. <?= number_format(($diskon['harga_produk'] - ($diskon['harga_produk'] * ($diskon['diskon_produk'] / 100))), 0, '.', '.') ?><span>Rp <?= number_format($diskon['harga_produk'], 0, '.', '.') ?></span></div>
                                        <button class="add_cart arrivals_single_button" data-id_produk="<?= $diskon['id_produk']; ?>" data-nama_produk="<?= $diskon['nama_produk'] ?>" data-harga_produk="<?php if ($diskon['diskon_produk'] == null) {
                                                                                                                                                                                                                echo $diskon['harga_produk'];
                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                echo ($diskon['harga_produk'] - ($diskon['harga_produk'] * ($diskon['diskon_produk'] / 100)));
                                                                                                                                                                                                            } ?>" data-gambar_produk="<?= $diskon['gambar_produk'] ?>">Add to Cart</button>
                                    </div>
                                    <ul class="arrivals_single_marks product_marks">
                                        <li class="arrivals_single_mark product_mark product_discount">-<?= $diskon['diskon_produk'] ?>%</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <form action="<?= base_url('main/search'); ?>" method="POST">
            <input name="search" type="submit" class="btn btn-primary col-12 kuning" style="color: white;height: 48px;" value="Semua Produk">
        </form>
    </div>
</div>


<!-- Mobile New Product -->
<p class="produk-baru-mobile" style="margin-top: 20px; margin-left: 25px;"><b>Produk</b> Terbaru</p>
<div class="tabs_line produk-baru-mobile"><span></span></div>
<div class="row produk-baru-mobile">
    <?php foreach ($produk as $product) : ?>
        <!-- Slider Item -->
        <!-- <div class="arrivals_slider_item"> -->
        <div class="border_active"></div>
        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
            <div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="<?= base_url('main/produk/') . $product['link'] ?>"><img src="<?= base_url('assets/images/produk/') . $product['gambar_produk'] ?>" width="90px" alt="cover buku"></div>
            <div class="product_content">
                <?php if ($product['diskon_produk'] > 0) : ?>
                    <div class="product_price">Rp. <?= number_format(($product['harga_produk'] - ($product['harga_produk'] * ($product['diskon_produk'] / 100))), '0', ',', '.'); ?><span><s>Rp <?= number_format($product['harga_produk'], '0', ',', '.'); ?></s></span></div>
                <?php else : ?>
                    <div class="product_price">Rp. <?= number_format($product['harga_produk'], '0', ',', '.'); ?></div>
                <?php endif; ?>
                <div class="product_name">
                    <div><a href="<?= base_url('main/produk/') . $product['link'] ?>"><?= $product['nama_produk']; ?></a></div>
                </div>
                <div class="product_extras">
                    <button class="add_cart product_cart_button" data-id_produk="<?= $product['id_produk']; ?>" data-nama_produk="<?= $product['nama_produk'] ?>" data-harga_produk="<?php if ($product['diskon_produk'] == 0) {
                                                                                                                                                                                            echo $product['harga_produk'];
                                                                                                                                                                                        } else {
                                                                                                                                                                                            echo ($product['harga_produk'] - ($product['harga_produk'] * ($product['diskon_produk'] / 100)));
                                                                                                                                                                                        } ?>" data-gambar_produk="<?= $product['gambar_produk'] ?>">Add to Cart</button>
                </div>
            </div>
            <ul class="product_marks">
                <?php if ($product['diskon_produk'] > 0) : ?>
                    <li class="product_mark product_new" style="background: #df3b3b">-<?= $product['diskon_produk'] ?>%</li>
                <?php else : ?>
                    <li class="product_mark product_new">baru</li>
                <?php endif; ?>
            </ul>
        </div>
        <!-- </div> -->
    <?php endforeach; ?>
</div>
<form action="<?= base_url('main/search'); ?>" method="POST">
    <input name="search" type="submit" class="btn btn-primary col-md-10 all-produk-mobile kuning" style="color: white;" value="Semua Produk">
</form>

<!-- End Mobile New Product -->

<!-- Best Sellers -->




<!-- Reviews -->
<?php if ($ulasan) : ?>
    <div class="reviews">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="reviews_title_container">
                        <h3 class="reviews_title">Ulasan Terbaru</h3>
                        <div class="reviews_all ml-auto"><a href="<?= base_url('ulasan'); ?>">Lihat Semua <span>Ulasan</span></a></div>
                    </div>

                    <div class="reviews_slider_container">

                        <!-- Reviews Slider -->
                        <div class="owl-carousel owl-theme reviews_slider">

                            <?php foreach ($ulasan as $ulas) : ?>
                                <!-- Reviews Slider Item -->
                                <div class="owl-item">
                                    <div class="review d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="review_image"><img src="<?= base_url('assets/images/') . $ulas['gambar_produk'] ?>" alt=""></div>
                                        </div>
                                        <div class="review_content">
                                            <div class="review_name"><a href="<?= base_url('main/produk/') . $ulas['link'] ?>"><?= $ulas['nama_ulasan']; ?></a></div>
                                            <div class="review_rating_container">
                                                <div class="rating_r rating_r_<?= $ulas['rating_ulasan']; ?> review_rating"><i></i><i></i><i></i><i></i><i></i> </div><br>
                                                <div class="review_time"><?= time_elapsed_string($ulas['timestamp']); ?></div>
                                            </div>
                                            <div class="review_text">
                                                <p><?= $ulas['isi_ulasan'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                        <div class="reviews_dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>