<!-- Home -->

<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/images/4617.jpg'); ?>"></div>
	<div class="home_overlay"></div>
	<div class="home_content d-flex flex-column align-items-center justify-content-center">
		<h2 class="home_title">Ulasan</h2>
	</div>
</div>

<!-- Blog -->

<div class="blog">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="blog_posts d-flex flex-row align-items-start justify-content-between">

					<?php if ($ulasan) : ?>
						<?php foreach ($ulasan as $ulas) : ?>
							<!-- Blog post -->
							<div class="blog_post">
								<div class="blog_image" style="background-image:url(<?php echo base_url('assets/images/ulasan.png') ?>)"></div>
								<div class="blog_text col">
									<div class="row" style="margin-left: 0px">
										<h6><?= $ulas['nama_ulasan']; ?></h6>
									</div>
									<div class="rating_r rating_r_<?= $ulas['rating_ulasan'] ?> product_rating"><i></i><i></i><i></i><i></i><i></i></div>
									<p><?= $ulas['isi_ulasan']; ?></p>
									<h6>via <a href="<?= base_url('main/produk/') . $ulas['link'] ?>"><?= $ulas['nama_produk']; ?></h6></a>
									<p class="text-right"><i><?= time_elapsed_string($ulas['timestamp']) ?></i></p>
								</div>
								<div class="blog_button"><a href="<?= base_url('main/produk/') . $ulas['link'] ?>">Selengkapnya</a></div>
							</div>
						<?php endforeach; ?>
					<?php else : ?>
						<div class="col-12">
							<h3 class="text-center"><i>Tidak ada ulasan</i></h3>
						</div>
					<?php endif; ?>


				</div>
			</div>

		</div>
	</div>
</div>