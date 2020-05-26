<!-- Shop -->

<div class="shop">
	<div class="container">

		<div class="row">

			<div class="col-lg-3">

				<!-- Shop Sidebar -->
				<div class="shop_sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">Kategori</div>
						<ul class="sidebar_categories">
							<?php foreach($kategori as $k) : ?>
							<li><a href="#"><?= $k['nama_kategori']; ?></a> <span style="margin-left: 100px"> 12 </span></li>
							<?php endforeach; ?>
							<!-- <li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
							<li><a href="#">TV & Audio</a></li>
							<li><a href="#">Gadgets</a></li>
							<li><a href="#">Car Electronics</a></li>
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li> -->
						</ul>
					</div>
				</div>

			</div>

			<div class="col-lg-9">

				<?php if ($this->input->post('keyword')) : ?>
					<h3>Hasil Pencarian '<?= $this->input->post('keyword'); ?>'</h3>
				<?php else : ?>
					<h3>Hasil Pencarian</h3>
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
									<div class="product_price">Rp <?= $pro['harga_produk']; ?></div>
									<div class="product_name">
										<div><a href="#" tabindex="0"><?= $pro['nama_produk']; ?></a></div>
									</div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
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