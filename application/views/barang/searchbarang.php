<?php if ($hasil_search) : ?>
			<div class="hasil-search">
				<hr>
				<?php foreach ($hasil_search as $article) : ?>
					<h2>
						<a href="<?= site_url('article/' . $article->slug) ?>"><?= html_escape($article->title) ?></a>
					</h2>
					<p><?= strip_tags(substr($article->content, 0, 200)) ?></p>
				<?php endforeach ?>
			</div>
		<?php else : ?>
			<?php if ($nama_barang) : ?>
				<div style="height: 400px;">
					<h1>Tidak ada yang ditemukan</h1>
					<p>Coba dengan kata kunci yang lain</p>
				</div>
			<?php endif ?>
		<?php endif ?>