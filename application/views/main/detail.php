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
						<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="product_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.</p></div>
						<div class="order_info d-flex flex-row">
							<form action="#">
								<div class="clearfix" style="z-index: 1000;">

									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
                                    </div>
                                    
                                    
                                </div>
                                <br>
                                <p>Tersisa 20</p>
                                
								<div class="product_price">Rp. <?= $produk['harga_produk']; ?></div>
								<div class="button_container">
									<button type="button" class="button cart_button">Add to Cart</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>