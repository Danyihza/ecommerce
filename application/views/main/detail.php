<!-- Single Product -->

<div class="single_product">
	<div class="container">
		<div class="row">

			<!-- Images -->

			<!-- Selected Image -->
			<div class="col-lg-6 order-lg-2 order-1">
				<div class="image_selected"><img src="<?= base_url('assets/images/') . $produk['gambar_produk'] ?>" height="400px" alt=""></div>
			</div>

			<!-- Description -->
			<div class="col-lg-6 order-3">
				<div class="product_description">
					<div class="product_category"><?= $produk['nama_kategori']; ?></div>
					<div class="product_name"><?= $produk['nama_produk']; ?></div>
					<div class="rating_r rating_r_4 product_rating"><i></i>
						<p>4.5</p>
					</div>
					<?php if ($produk['desk_produk']) : ?>
						<div class="product_text"><?= $produk['desk_produk']; ?></div>
					<?php else : ?>
						<div class="product_text">
							<p>-</p>
						</div>
					<?php endif; ?>
					<div class="order_info d-flex flex-row">
						<form action="#">
							<div class="clearfix" style="z-index: 1000;">

								<!-- Product Quantity -->
								<div class="product_quantity clearfix">
									<span>Kuantitas: </span>
									<input id="quantity_input" type="number" min="1" max="<?= $produk['stok_produk']; ?>" value="1">
								</div>


							</div>
							<br>
							<p>Tersisa <?= $produk['stok_produk']; ?></p>

							<?php if ($produk['diskon_produk']) : ?>
								<div class="product_price" style="color:red;">Rp. <?= number_format(($produk['harga_produk'] - ($produk['harga_produk'] * ($produk['diskon_produk'] / 100))), '0', ',', '.'); ?><br><span style="font-size:16px;color:black;"><s>Rp. 525.000</s></span></div>
							<?php else : ?>
								<div class="product_price" style="color:red;">Rp. <?= number_format($produk['harga_produk'], '0', ',', '.'); ?></div>
							<?php endif; ?>
							<div class="button_container">
								<button type="button" onclick="toast()" class="button cart_button add_cart" data-id_produk="<?= $produk['id_produk']; ?>" data-nama_produk="<?= $produk['nama_produk'] ?>" data-harga_produk="<?php if ($produk['diskon_produk'] == null) {
																																																									echo $produk['harga_produk'];
																																																								} else {
																																																									echo ($produk['harga_produk'] - ($produk['harga_produk'] * ($produk['diskon_produk'] / 100)));
																																																								} ?>" data-gambar_produk="<?= $produk['gambar_produk'] ?>">Add to Cart</button>
							</div>

						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="comment-container theme--light">
	<div class="comments">
		<div class="card v-card v-sheet theme--light elevation-2"><span class="headline">Leave a comment</span>
			<div class="sign-in-wrapper">
				<p class="caption disclaimer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida lacinia faucibus. Sed tincidunt ex sem, non gravida odio fermentum sit amet.</p>
				<p class="error-message"></p>
			</div>
			<!---->
		</div>
		<div>
			<div class="card v-card v-sheet theme--light elevation-2">
				<div class="header">
					<div class="v-avatar avatar" style="height: 50px; width: 50px;"><img src="https://images.unsplash.com/photo-1490894641324-cfac2f5cd077?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=100&q=70"></div>
					<span class="displayName title">John Doe</span> <span class="displayName caption">2 days ago</span>
				</div>
				<!---->
				<div class="wrapper comment">
					<p>Fusce sodales magna id porta egestas. Nulla massa est, hendrerit nec auctor vitae, porta ut est.</p>
				</div>
				<div class="actions">
					<!---->
					<!---->
					<!---->
				</div>
				<div class="v-dialog__container" style="display: block;"></div>
			</div>
			<!---->
			<div class="answers">
				<!---->
			</div>
		</div>
		<div>
			<div class="card v-card v-sheet theme--light elevation-2">
				<div class="header">
					<div class="v-avatar avatar" style="height: 50px; width: 50px;"><img src="https://images.unsplash.com/photo-1476657680631-c07285ff2581?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=70"></div>
					<span class="displayName title">Albert Arja</span> <span class="displayName caption">15 days ago</span>
				</div>
				<!---->
				<div class="wrapper comment">
					<p>Fusce sodales magna id porta egestas. Nulla massa est, hendrerit nec auctor vitae, porta ut est.</p>
					<p>Thanks You.</p>
				</div>
				<div class="actions">
					<!---->
					<!---->
					<!---->
				</div>
				<div class="v-dialog__container" style="display: block;"></div>
			</div>
			<!---->
			<div class="answers">
				<!---->
			</div>
		</div>
		<div>
			<div class="card v-card v-sheet theme--light elevation-2">
				<div class="head er">
					<div class="v-avatar avatar" style="height: 50px; width: 50px;"><img src="https://images.unsplash.com/photo-1490894641324-cfac2f5cd077?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=100&q=70"></div>
					<span class="displayName title">Robert</span> <span class="displayName caption">2 months ago</span>
				</div>
				<!---->
				<div class="wrapper comment">
					<p>Fusce sodales magna id porta egestas. Nulla massa est, hendrerit nec auctor vitae, porta ut est. </p>
					<p>Fusce sodales magna id porta egestas. Nulla massa est, hendrerit nec auctor vitae, porta ut est.</p>
				</div>
				<div class="actions">
					<!---->
					<!---->
					<!---->
				</div>
				<div class="v-dialog__container" style="display: block;"></div>
			</div>
			<!---->
			<div class="answers">
				<!---->
			</div>
		</div>
	</div>
</div>