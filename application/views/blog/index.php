<!-- Home -->

<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/images/4617.jpg'); ?>"></div>
	<div class="home_overlay"></div>
	<div class="home_content d-flex flex-column align-items-center justify-content-center">
		<h2 class="home_title">Media Ar-Raihan Blog</h2>
	</div>
</div>

<!-- Blog -->

<div class="blog">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="blog_posts d-flex flex-row align-items-start justify-content-between">

					<?php foreach ($artikel as $blog) : ?>
						<!-- Blog post -->
						<div class="blog_post">
							<div class="blog_image" style="background-image:url(<?= base_url('assets/images/blog/') . $blog['foto_artikel'] ?>)"></div>
							<div class="blog_text"><?= $blog['judul_artikel']; ?></div>
							<div class="blog_text" style="font-weight: 100px;"><?= substr($blog['isi_artikel'], 0, 100); ?>...</div>
							<div class="blog_button"><a href="<?= base_url('blog/detail/') . $blog['id_artikel'] ?>">Continue Reading</a></div>
						</div>
					<?php endforeach; ?>

				</div>
			</div>

		</div>
	</div>
</div>

