<!-- Home -->

<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/images/blog/') . $artikel['foto_artikel'] ?>" data-speed="0.8"></div>
</div>

<!-- Single Blog Post -->

<div class="single_post">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="single_post_title"><?= $artikel['judul_artikel'] ?></div>
				<div class="single_post_text">
					<?= $artikel['isi_artikel'] ?>
				</div>
			</div>
		</div>
	</div>
</div>

<hr class="container row col-lg-8 offset-lg-2">

<!-- /.card-body -->
<div class="container" id="komentar">
	<div class="row">
		<div class="col-lg-8 offset-lg-2">
			<h5 class="font-italic">Komentar</h5>
			<div class="card-footer card-comments">
				<?php foreach ($komentar1 as $k) : ?>
					<div class="card-comment">
						<div class="comment-parent">
							<!-- User image -->
							<img class="img-circle img-sm" src="<?= base_url('assets/images/') ?>profile.png" alt="User Image">

							<div class="comment-text">
								<span class="username">
									<?= $k->nama_kmn; ?><span class="text-muted font-italic">(<?= ($k->email_kmn != null) ? $k->email_kmn : 'Anonymous' ?>)</span>
									<span class="text-muted float-right"><?= time_elapsed_string($k->waktu_kmn); ?></span>
								</span><!-- /.username -->
								<?= $k->isi_kmn ?>
							</div>
							<a href="javascript:void(0)" data-toggle="modal" data-target="#modalbalaskomen<?= $k->id_kmn ?>" class="badge badge-warning" style="margin-left: 40px"><i class="fa fa-reply"></i> Reply</a>
							<!-- /.comment-text -->
						</div>
					</div>
					<?php
					$id_artikel = $k->id_artikel;
					$id_kmn = $k->id_kmn;
					$sql = $this->db->query("select * from komentar where id_artikel=$id_artikel and status_kmn=$id_kmn")->result();
					foreach ($sql as $km) :
					?>
						<div class="card-comment">
							<div class="comment-child">
								<!-- User image -->
								<img class="img-circle img-sm" src="<?= base_url('assets/images/') ?>profile.png" alt="User Image">

								<div class="comment-text">
									<span class="username">
										<?= $km->nama_kmn; ?><span class="text-muted font-italic">(<?= ($km->email_kmn != null) ? $km->email_kmn : 'Anonymous' ?>)</span>
										<span class="text-muted float-right"><?= time_elapsed_string($km->waktu_kmn); ?></span>
									</span><!-- /.username -->
									<?= $km->isi_kmn; ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endforeach; ?>
			</div>
			<div class="card-footer">
				<button class="btn btn-primary btn-sm col-12 coklat" data-toggle="modal" data-target="#modaltambahkomen">Add a Comment</button>
			</div>
		</div>
	</div>
</div>


<!-- Blog Posts -->

<div class="blog">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="blog_posts d-flex flex-row align-items-start justify-content-between">

					<!-- Blog post -->
					<div class="blog_post">
						<div class="blog_image" style="background-image:url(<?= base_url('assets/templates/images/blog_4.jpg'); ?>)"></div>
						<div class="blog_text">Etiam leo nibh, consectetur nec orci et, tempus tempus ex</div>
						<div class="blog_button"><a href="blog_single.html">Continue Reading</a></div>
					</div>

					<!-- Blog post -->
					<div class="blog_post">
						<div class="blog_image" style="background-image:url(<?= base_url('assets/templates/images/blog_5.jpg'); ?>)"></div>
						<div class="blog_text">Sed viverra pellentesque dictum. Aenean ligula justo, viverra in lacus porttitor</div>
						<div class="blog_button"><a href="blog_single.html">Continue Reading</a></div>
					</div>

					<!-- Blog post -->
					<div class="blog_post">
						<div class="blog_image" style="background-image:url(<?= base_url('assets/templates/images/blog_6.jpg'); ?>)"></div>
						<div class="blog_text">In nisl tortor, tempus nec ex vitae, bibendum rutrum mi. Integer tempus nisi</div>
						<div class="blog_button"><a href="blog_single.html">Continue Reading</a></div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Tambah Komentar -->
<div class="modal fade" id="modaltambahkomen" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambahkan Komentar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('blog/tambahkomen') ?>" method="post">
					<div class="form-group">
						<input hidden type="text" name="id_artikel" value="<?= $artikel['id_artikel']; ?>">

						<label for="exampleInputEmail1">Nama</label>
						<input type="text" name="namakomen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						<small id="emailHelp" class="form-text text-muted">Kami akan menampilkan nama anda .</small>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" name="emailkomen" class="form-control" id="exampleInputEmail1" placeholder="Opsional" aria-describedby="emailHelp">
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Komentar Anda</label>
						<textarea class="form-control" name="isikomen" id="exampleFormControlTextarea1" rows="3" required></textarea>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm kuning" data-dismiss="modal">Close</button>
				<input type="submit" class="btn btn-primary btn-sm coklat" value="Post">
			</div>
			</form>
		</div>
	</div>
</div>


<!-- Modal Balas Komentar -->
<?php foreach ($komentar1 as $k) : ?>
	<?php
	$id_artikel = $k->id_artikel;
    $id_kmn = $k->id_kmn; ?>
	<div class="modal fade" id="modalbalaskomen<?= $id_kmn ?>" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Balas Komentar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('blog/balaskomen'); ?>" method="post">
						<input hidden type="text" name="status_kmn" value="<?= $id_kmn; ?>">
						<input hidden type="text" name="id_artikel" value="<?= $artikel['id_artikel']; ?>">

						<div class="form-group">
							<label for="exampleInputEmail1">Nama</label>
							<input type="text" name="namakomen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
							<small id="emailHelp" class="form-text text-muted">Kami akan menampilkan nama anda .</small>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" name="emailkomen" class="form-control" id="exampleInputEmail1" placeholder="Opsional" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Komentar Anda</label>
							<textarea class="form-control" name="isikomen" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm kuning" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-primary btn-sm coklat" value="Post">
				</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach; ?>