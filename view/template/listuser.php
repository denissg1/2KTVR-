	<?php ob_start(); ?>
	<h1>Список пользователей</h1>
	<ul>
	<?php foreach($users as $user): ?>

		<li>
			<a href="/2KTVR-/index.php/showuser?id=<?php echo $user['id'];?>">
				<?php echo $user['id'].'. '.$user['lastname'].', '.$user['firstname']; ?>
			</a>
		</li>
	<?php endforeach; ?>
	</ul>
	<?php $content = ob_get_clean(); ?>
	<?php include 'layout.php'; ?>