<?php
	//$title = $user['lastname'].', '.$user['firstmane'];
	ob_start();
?>


<h2> <?php echo $user['lastname'].', '.$user['firstname']; ?> </h2>
<div> Личный код: <?php echo $user['isikukood']; ?> </div>
<div> Адрес: <?php echo $user['address']; ?> </div>
<div> Почтовый индекс: <?php echo $user['postcode']; ?> </div>
<div> Телефон: <?php echo $user['phone']; ?> </div>
<div> Эл. почта: <?php echo $user['email']; ?> </div>

<?php
	$content = ob_get_clean();
	include 'view/template/layout.php';
?>


