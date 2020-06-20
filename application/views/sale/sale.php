<!-- Shop -->

<div class="shop">
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <!-- Shop Sidebar -->
                <div class="shop_sidebar">
                    <div class="kategori_sidebar">
                        <div class="sidebar_section">
                            <div class="sidebar_title">Kategori</div>
                            <ul class="sidebar_categories">
                                <table border=0 class="fixed">
                                    <tbody>
                                        <col width="50px" />
                                        <col width="150px" />
                                        <?php foreach ($kat as $kats) : ?>
                                            <tr>
                                                <td>
                                                    <li>
                                                        <form action="<?= base_url('main/search') ?>" method="post">
                                                            <input type="hidden" name="form_sidebar" value="<?= $kats['id_kategori'] ?>">
                                                            <input class="button_kategori_sidebar" name="button_kategori" value="<?= $kats['nama_kategori']; ?>" type="submit">
                                                        </form>
                                                    </li>
                                                </td>
                                                <td align="right">
                                                    <span class="badge badge-coklat text-white"><?= $kats['count']; ?></span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-9">

                <h3>Sale Now</h3>

                <!-- Shop Content -->

                <div class="shop_content">
                    <div class="shop_bar clearfix">
                        <div class="shop_product_count"></div>
                        <div class="shop_sorting">
                            <span>Sort by:</span>
                            <ul>
                                <li>
                                    <span class="sorting_text">price<i class="fas fa-chevron-down"></span></i>
                                    <ul>
                                        <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
                                        <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "price" }'>price</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="product_grid">
                        <div class="product_grid_border"></div>

                        <?php foreach ($produk as $pro) : 
                            $nama = '';
                            if (strlen($pro['nama_produk']) > 15) {
                                $nama .= substr($pro['nama_produk'], 0, 15) . '...';
                            } else {
                                $nama .= $pro['nama_produk'];
                            }
                            ?>
                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url('assets/images/produk/') . $pro['gambar_produk'] ?>" width="80%" alt="foto produk"></div>
                                <div class="product_content">
                                    <div class="product_price" style="color: #df3b3b">Rp <?= number_format(($pro['harga_produk'] - ($pro['harga_produk'] * ($pro['diskon_produk'] / 100))), '0', ',', '.'); ?></div>
                                    <div class="product_name">
                                        <div><a href="<?= base_url('main/produk/') . $pro['link'] ?>" tabindex="0"><?= $nama ?></a></div>
                                    </div>
                                </div>
                                <div class="product_fav" data-id_produk="<?= $pro['id_produk']; ?>" data-nama_produk="<?= to_link($pro['nama_produk']) ?>" data-harga_produk="<?php if ($pro['diskon_produk'] == 0) {
                                                                                                                                                                                    echo $pro['harga_produk'];
                                                                                                                                                                                } else {
                                                                                                                                                                                    echo ($pro['harga_produk'] - ($pro['harga_produk'] * ($pro['diskon_produk'] / 100)));
                                                                                                                                                                                } ?>" data-gambar_produk="<?= $pro['gambar_produk'] ?>"><i class="fas fa-cart-plus"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_new" style="background: #df3b3b">-<?= $pro['diskon_produk'] ?>%</li>
                                </ul>
                            </div>
                        <?php endforeach; ?>



                    </div>

                    <!-- Shop Page Navigation -->


                    <!-- <div class="shop_page_nav d-flex flex-row">
						<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
						<ul class="page_nav d-flex flex-row">
							<li><a class="active-product">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">21</a></li>
						</ul>
						<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
					</div> -->

                </div>

            </div>
        </div>
    </div>
</div>