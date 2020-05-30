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
								<?php foreach ($kategori as $kat) : ?>
									<li>
										<form action="<?= base_url('main/search') ?>" method="post">
											<input type="hidden" name="form_sidebar" value="<?= $kat['id_kategori'] ?>">
											<input class="button_kategori_sidebar" name="button_kategori" value="<?= $kat['nama_kategori']; ?>" type="submit"><span style="margin-left: 100px"> 12 </span>
										</form>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>

			</div>

			<div class="col-lg-9">

				<?php if ($this->input->post('keyword')) : ?>
					<h3>Hasil Pencarian '<?= $this->input->post('keyword'); ?>'</h3>
				<?php elseif ($this->input->post('form_sidebar')) : ?>
					<h3>Hasil Pencarian Kategori <?= $kategoribyid->nama_kategori; ?></h3>
				<?php else : ?>
					<h3>Semua Produk</h3>
				<?php endif; ?>

				<!-- Shop Content -->

				<div class="shop_content">
					<div class="shop_bar clearfix">
						<div class="shop_product_count"><span><?= $total_rows; ?></span> judul buku ditemukan</div>
						<div class="shop_sorting">
							<span>Sort by:</span>
							<ul>
								<li>
									<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
									<ul>
										<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>default</li>
										<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
										<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "price" }'>price</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>

					<div class="product_grid">
						<div class="product_grid_border"></div>

						<?php foreach ($produk as $pro) : ?>
							<!-- Product Item -->
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
							</div>
						<?php endforeach; ?>



					</div>

					<!-- Shop Page Navigation -->

					<?= $this->pagination->create_links(); ?>

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