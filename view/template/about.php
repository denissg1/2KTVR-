<?php
	ob_start();
?>


<h2> О себе </h2>
<p>Превед!</p>
<p>Йа Денис Гаврин</p>
<p>Группа 2KTVR</p>
<p><a href mailto:denis.gavrin@gmail.com>denis.gavrin@gmail.com</a></p>

<?php
	//include 'layout.php';
	$content = ob_get_clean();
	include 'layout.php';
?>


