<?php
	$title = $post['title'];
	ob_start();
?>


<h2> <?php echo $post['title']; ?> </h2>
<div class="date"> Дата: <?php echo $post['date']; ?> </div>
<div class="autor"> Автор: <?php echo $post['autor']; ?> </div>
<div class="content"> <?php echo $post['content']; ?> </div>

<?php
	$content = ob_get_clean();
	include 'view/template/layout.php';
?>


