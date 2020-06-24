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
            <img class="d-block w-100" src="<?= base_url() ?>assets/images/produk/<?= $palingbaru['gambar_produk'] ?>" width="100%" alt="Slider">
            <div class="button banner_button coklat banner-button"><a href="<?= base_url('main/produk/') . $palingbaru['link']; ?>">Buy Now</a></div>
        </div>
        <?php foreach ($newproduk as $produk1) : ?>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url() ?>assets/images/produk/<?= $produk1['gambar_produk'] ?>" width="100%" alt="Slider">
                <div class="button banner_button coklat banner-button"><a href="<?= base_url('main/produk/') . $produk1['link']; ?>">Buy Now</a></div>
            </div>
        <?php endforeach ?>
        <!-- <div class="carousel-item">
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
        </div> -->
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
                        <div class="new_arrivals_title">New Arrival</div>
                        <ul class="clearfix">
                            <li class="active"></li>
                        </ul>
                        <div class="tabs_line"><span></span></div>
                    </div>
                    <div class="row">

                        <div class="col-lg-12" style="z-index:1;">

                            <!-- Product Panel -->
                            <div class="product_panel panel active">
                                <div class="arrivals_slider slider">
                                    <?php foreach ($products as $product) :
                                        $nama = '';
                                        if (strlen($product['nama_produk']) > 15) {
                                            $nama .= substr($product['nama_produk'], 0, 15) . '...';
                                        } else {
                                            $nama .= $product['nama_produk'];
                                        }
                                    ?>
                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <a href="<?= base_url('main/produk/') . $product['link'] ?>">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url('assets/images/produk/') . $product['gambar_produk'] ?>" width="81%" alt="cover buku"></div>
                                                    <div class="product_content">
                                                        <?php if ($product['diskon_produk'] > 0) : ?>
                                                            <div class="product_price">Rp. <?= number_format(($product['harga_produk'] - ($product['harga_produk'] * ($product['diskon_produk'] / 100))), '0', ',', '.'); ?><span><s>Rp <?= number_format($product['harga_produk'], '0', ',', '.'); ?></s></span></div>
                                                        <?php else : ?>
                                                            <div class="product_price">Rp. <?= number_format($product['harga_produk'], '0', ',', '.'); ?></div>
                                                        <?php endif; ?>
                                                        <div class="product_name">
                                                            <div><a href="<?= base_url('main/produk/') . $product['link'] ?>"><?= $nama ?></a></div>
                                                        </div>
                                                </a>
                                                <div class="product_extras">
                                                    <button class="add_cart product_cart_button" data-id_produk="<?= $product['id_produk']; ?>" data-nama_produk="<?= to_link($product['nama_produk']) ?>" data-harga_produk="<?php if ($product['diskon_produk'] == 0) {
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

                    <?php if ($diskon['diskon_produk'] > 0) : ?>
                        <!-- <div class="col-lg-3">
                                <div class="arrivals_single clearfix">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div class="arrivals_single_image text-center"><img src="<?= base_url('assets/images/produk/') . $diskon['gambar_produk'] ?>" width="120px" alt=""></div>
                                        <div class="arrivals_single_content">
                                            <div class="arrivals_single_category"><a href="#"><?= $diskon['nama_kategori']; ?></a></div>
                                            <div class="arrivals_single_name_container clearfix">
                                                <div class="arrivals_single_name"><a href="<?= base_url('main/produk/') . $diskon['link'] ?>"><?= $diskon['nama_produk']; ?></a></div>
                                            </div>
                                            <div class="bestsellers_price discount">Rp. <?= number_format(($diskon['harga_produk'] - ($diskon['harga_produk'] * ($diskon['diskon_produk'] / 100))), 0, '.', '.') ?><span>Rp <?= number_format($diskon['harga_produk'], 0, '.', '.') ?></span></div>
                                            <button class="add_cart arrivals_single_button" data-id_produk="<?= $diskon['id_produk']; ?>" data-nama_produk="<?= to_link($diskon['nama_produk']) ?>" data-harga_produk="<?php if ($diskon['diskon_produk'] == null) {
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
                            </div> -->
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
    <form action="<?= base_url('main/search'); ?>" method="POST">
        <input name="search" type="submit" class="btn btn-primary col-12 kuning" style="color: white;height: 48px;" value="View More">
    </form>

    <div class="deals mt-3 mb-3" style="width:100%; height:843px;">
        <div class="deals_title">Now Sale</div>
        <div class="deals_slider_container">

            <!-- Deals Slider -->
            <div class="owl-carousel owl-theme deals_slider">

                <?php foreach ($listdiskon as $diskon) : ?>
                    <!-- Deals Item -->
                    <div class="owl-item deals_item">
                        <div class="deals_image"><a href="<?= base_url('main/produk/') . $diskon['link'] ?>"><img src="<?= base_url('assets/images/produk/') . $diskon['gambar_produk'] ?>" alt=""></a></div>
                        <div class="deals_content">
                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                <div class="deals_item_category"><a href="#"><?= $diskon['nama_kategori']; ?></a></div>
                                <div class="deals_item_price_a ml-auto"><b>-<?= $diskon['diskon_produk'] ?>%</b>&nbsp;<s>Rp <?= number_format($diskon['harga_produk'], '0', ',', '.'); ?></s></div>
                            </div>
                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                <div class="deals_item_name"><a href="<?= base_url('main/produk/') . $diskon['link'] ?>"><?= $diskon['nama_produk']; ?></a></div>
                                <div class="deals_item_price ml-auto">Rp <?= number_format(($diskon['harga_produk'] - ($diskon['harga_produk'] * ($diskon['diskon_produk'] / 100))), '0', ',', '.'); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>

        <div class="deals_slider_nav_container">
            <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
            <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
        </div>
    </div>


</div>

</div>


<!-- Mobile New Product -->
<div style="margin-top:-81px">
    <p class="produk-baru-mobile" style="margin-top: 20px; margin-left: 25px;"><b>Produk</b>&nbsp;Terbaru</p>
    <div class="tabs_line produk-baru-mobile"><span></span></div>
    <div class="row produk-baru-mobile">
        <?php foreach ($produk as $product) :
            $nama = '';
            if (strlen($product['nama_produk']) > 15) {
                $nama .= substr($product['nama_produk'], 0, 15) . '...';
            } else {
                $nama .= $product['nama_produk'];
            }
        ?>
            <!-- Slider Item -->
            <!-- <div class="arrivals_slider_item"> -->
            <div class="border_active"></div>
            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                <div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="<?= base_url('main/produk/') . $product['link'] ?>"><img src="<?= base_url('assets/images/produk/') . $product['gambar_produk'] ?>" width="130px" alt="cover buku"></div>
                <div class="product_content">
                    <?php if ($product['diskon_produk'] > 0) : ?>
                        <div class="product_price">Rp. <?= number_format(($product['harga_produk'] - ($product['harga_produk'] * ($product['diskon_produk'] / 100))), '0', ',', '.'); ?><span><s>Rp <?= number_format($product['harga_produk'], '0', ',', '.'); ?></s></span></div>
                    <?php else : ?>
                        <div class="product_price">Rp. <?= number_format($product['harga_produk'], '0', ',', '.'); ?></div>
                    <?php endif; ?>
                    <div class="product_name">
                        <div><a href="<?= base_url('main/produk/') . $product['link'] ?>"><?= $nama ?></a></div>
                    </div>
                    <div class="product_extras">
                        <button class="add_cart product_cart_button" data-id_produk="<?= $product['id_produk']; ?>" data-nama_produk="<?= to_link($product['nama_produk']) ?>" data-harga_produk="<?php if ($product['diskon_produk'] == 0) {
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
</div>
<form action="<?= base_url('main/search'); ?>" method="POST">
    <input name="search" type="submit" class="btn btn-primary col-md-10 all-produk-mobile kuning" style="color: white;" value="Semua Produk">
</form>

<!-- End Mobile New Product -->

<div class="produk-baru-mobile">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="deals">
                    <div class="deals_title">Now Sale</div>
                    <div class="deals_slider_container">

                        <!-- Deals Slider -->
                        <div class="owl-carousel owl-theme deals_slider">

                            <?php foreach ($listdiskon as $diskon) :
                                $nama = '';
                                if (strlen($diskon['nama_produk']) > 25) {
                                    $nama .= substr($diskon['nama_produk'], 0, 25) . '...';
                                } else {
                                    $nama .= $diskon['nama_produk'];
                                }
                            ?>
                                <!-- Deals Item -->
                                <div class="owl-item deals_item">
                                    <div class="deals_image"><a href="<?= base_url('main/produk/') . $diskon['link'] ?>"><img src="<?= base_url('assets/images/produk/') . $diskon['gambar_produk'] ?>" alt=""></a></div>
                                    <div class="deals_content">
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_category"><a href="#"><?= $diskon['nama_kategori']; ?></a></div>
                                            <div class="deals_item_price_a ml-auto"><b>-<?= $diskon['diskon_produk'] ?>%</b>&nbsp;<s>Rp <?= number_format($diskon['harga_produk'], '0', ',', '.'); ?></s></div>
                                        </div>
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_name"><a href="<?= base_url('main/produk/') . $diskon['link'] ?>"><?= $nama ?></a></div>
                                            <div class="deals_item_price ml-auto">Rp <?= number_format(($diskon['harga_produk'] - ($diskon['harga_produk'] * ($diskon['diskon_produk'] / 100))), '0', ',', '.'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>

                    <div class="deals_slider_nav_container">
                        <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                        <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Article -->

<div class="reviews blogku">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="reviews_title_container">
                    <h3 class="reviews_title">Artikel Terbaru</h3>
                    <div class="reviews_all ml-auto"><a href="<?= base_url('blog'); ?>">Lihat Semua <span>Artikel</span></a></div>
                </div>

                <div class="loop">
                    <div class="loopGrid post">

                        <?php foreach ($blog as $b) : ?>
                            <div class="item_post">
                                <div class="imgWrap">
                                    <a href="<?= base_url('blog/detail/') . $b['id_artikel'] ?>"> <img src="<?= base_url('assets/images/blog/') . $b['foto_artikel'] ?>" width="100%" alt=""></a>
                                </div>
                                <div class="postGrid">
                                    <div class="avaPost">
                                        <img style="display: block; max-width: 100%; opacity: 1;" src="favicon.ico" class="loaded">
                                    </div>
                                    <div class="infoPost">
                                        <h5><a href="<?= base_url('blog/detail/') . $b['id_artikel'] ?>"><?= ucwords(strtolower($b['judul_artikel'])); ?></a></h5>
                                        <small>Ditulis oleh Admin • <?= time_elapsed_string('@' . $b['tanggal_artikel']); ?></small>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Reviews -->
<div class="reviews">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="reviews_title_container">
                    <h3 class="reviews_title">Ulasan Terbaru</h3>
                    <div class="reviews_all ml-auto"><a href="<?= base_url('ulasan'); ?>">Lihat Semua <span>Ulasan</span></a></div>
                </div>

                <?php if ($ulasan) : ?>
                    <div class="reviews_slider_container">

                        <!-- Reviews Slider -->
                        <div class="owl-carousel owl-theme reviews_slider">
                            <?php foreach ($ulasan as $ulas) : ?>
                                <!-- Reviews Slider Item -->
                                <div class="owl-item">
                                    <div class="review d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="review_image"><img src="<?= base_url('assets/images/produk/') . $ulas['gambar_produk'] ?>" alt=""></div>
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
                    <?php else : ?>
                        <p class="font-italic">Belum ada Ulasan</p>
                    <?php endif; ?>
                    <div class="reviews_dots"></div>
                    </div>
            </div>
        </div>
    </div>
</div>