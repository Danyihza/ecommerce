<!-- Single Product -->

<div class="single_product">
	<div class="container">
		<div class="row">

			<!-- Images -->

			<!-- Selected Image -->
			<div class="col-lg-6 order-lg-2 order-1 gambar">
				<div class="image_selected"><img src="<?= base_url('assets/images/produk/') . $produk['gambar_produk'] ?>" height="400px" alt=""></div>
			</div>

			<!-- Description -->
			<div class="col-lg-6 order-3">
				<div class="product_description">
					<div class="product_category"><?= $produk['nama_kategori']; ?></div>
					<div class="product_name"><?= $produk['nama_produk']; ?></div>
					<div class="rating_r rating_r_4 product_rating"><i></i>
						<?php if ($ulasan) : ?>
							<p><?= $countulasan['rerata'] ?></p>
						<?php else : ?>
							<p>-/-</p>
						<?php endif ?>
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
							<div class="clearfix">

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
								<button type="button" onclick="toast()" class="button cart_button add_cart coklat" data-id_produk="<?= $produk['id_produk']; ?>" data-nama_produk="<?= $produk['nama_produk'] ?>" data-harga_produk="<?php if ($produk['diskon_produk'] == null) {
																																																											echo $produk['harga_produk'];
																																																										} else {
																																																											echo ($produk['harga_produk'] - ($produk['harga_produk'] * ($produk['diskon_produk'] / 100)));
																																																										} ?>" data-gambar_produk="<?= $produk['gambar_produk'] ?>"><i class="fas fa-cart-plus"></i> Add to Cart</button>
							</div>

						</form>
					</div>
				</div>
			</div>

			<!-- /.card-body -->

		</div>
	</div>
	<div class="single_product">
		<div class="container">
			<div class="card-footer card-comments">
				<?php if ($ulasan) : ?>
					<div class="rating_r rating_r_4 product_rating"><i></i>
						<p><?= $countulasan['rerata']; ?> / 5 (<?= $countulasan['jml']; ?> Ulasan)</p>
					</div>
				<?php else : ?>
					<div class="rating_r rating_r_4 product_rating">
						<h4>Ulasan</h4>
					</div>
				<?php endif ?>

				<?php if (!$ulasan) : ?>
					<div class="card-comment">
						<div class="comment-parent">
							<p>Belum ada Ulasan...</p>
						</div>
					</div>
				<?php else : ?>
					<?php foreach ($ulasan as $u) : ?>
						<div class="card-comment">
							<div class="comment-parent">

								<!-- User image -->
								<img class="img-circle img-sm" src="<?= base_url('assets/images/') ?>profile.png" alt="User Image">

								<div class="comment-text">
									<span class="username">
									</span>
									<!-- /.username -->
									<?= $u['nama_ulasan']; ?>
									<div class="rating_r rating_r_<?= $u['rating_ulasan'] ?> product_rating rating_komen"><i></i><i></i><i></i><i></i><i></i></div>
									<span class="text-muted float-right"><?= time_elapsed_string($u['timestamp']); ?></span>
									<!-- /.comment-text -->
									<?= $u['isi_ulasan']; ?>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				<?php endif ?>
			</div>
			<div class="card-footer d-flex flex-row-reverse">
				<button class="btn btn-primary btn-sm coklat" data-toggle="modal" data-target="#modaltambahulasan"><i class="fas fa-plus"></i> Tambahkan</button>
			</div>
		</div>
	</div>
</div>


<!-- Modal Tambah Ulasan -->
<div class="modal fade" id="modaltambahulasan" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambahkan Komentar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('ulasan/kirimulasan') ?>" method="post">
					<div class="form-group">
						<input hidden type="text" name="id_produk_ulasan" value="<?= $produk['id_produk']  ?>">
						<label for="exampleInputEmail1">Nama</label>
						<input type="text" name="namaulasan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						<small id="emailHelp" class="form-text text-muted">Kami akan menampilkan nama anda .</small>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Rating Anda</label>
						<select name="ratingulasan" class="form-control fa" style="color: #F8BF00">
							<option value="5" class="fa" style="color: #F8BF00">&#xf005 &#xf005 &#xf005 &#xf005 &#xf005</option>
							<option value="4" class="fa" style="color: #F8BF00">&#xf005 &#xf005 &#xf005 &#xf005</option>
							<option value="3" class="fa" style="color: #F8BF00">&#xf005 &#xf005 &#xf005</option>
							<option value="2" class="fa" style="color: #F8BF00">&#xf005 &#xf005</option>
							<option value="1" class="fa" style="color: #F8BF00">&#xf005</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Ulasan Anda</label>
						<textarea class="form-control" name="isiulasan" id="exampleFormControlTextarea1" rows="3" required></textarea>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm kuning" data-dismiss="modal">Close</button>
				<input type="submit" class="btn btn-primary btn-sm coklat" value="Kirim Ulasan">
			</div>
			</form>
		</div>
	</div>
</div>