<?php ob_start(); ?>

	<h1>Админка постов</h1>

<form action="/2KTVR-/index.php/addpost" method="POST" name="add_form" id="form1">

	<table>
		<tr>
			<td>Автор</td>
			<td><input type="text" name="add_autor"></td>
		</tr>
		<tr>
			<td>Дата</td>
			<td><input type="text" name="add_date"></td>
		</tr>
		<tr>
			<td>Заголовок</td>
			<td><input type="text" name="add_title"></td>
		</tr>
		<tr>
			<td>Содержание</td>
			<td><input type="text" name="add_content"></td>
		</tr>						
		<tr>
			<td><input type="reset" name="reset" value="Очистить"> </td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Добавить"> </td>

	</table>


</form>

<h1>Список постов</h1>
	<ul>
	<?php foreach($posts as $post): ?>

		<li>
			<a href="/2KTVR-/index.php/deletepost?id=<?php echo $post['id'];?>">[X]</a>
			<a href="/2KTVR-/index.php/showpost?id=<?php echo $post['id'];?>">
				<?php echo $post['id'].' '.$post['title']; ?>
			</a>
		</li>
	<?php endforeach; ?>
	</ul>
	

<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>