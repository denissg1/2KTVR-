	<?php ob_start(); ?>
	<h1>Список постов</h1>
	<ul>
	<?php foreach($posts as $post): ?>

		<li>
			<a href="/2KTVR-/index.php/showpost?id=<?php echo $post['id'];?>">
				<?php echo $post['id'].' '.$post['title']; ?>
			</a>
		</li>
	<?php endforeach; ?>
	</ul>
	<?php $content = ob_get_clean(); ?>
	<?php include 'layout.php'; ?>