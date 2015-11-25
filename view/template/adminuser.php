<?php ob_start(); ?>

	<h1>Админка пользователей</h1>

<form action="/2KTVR-/index.php/adduser" method="POST" name="add_form" id="form1">

	<table>
		<tr>
			<td>Личный код</td>
			<td><input type="text" name="add_isikukood"></td>
		</tr>
		<tr>
			<td>Имя</td>
			<td><input type="text" name="add_firstname"></td>
		</tr>
		<tr>
			<td>Фамилия</td>
			<td><input type="text" name="add_lastname"></td>
		</tr>
		<tr>
			<td>Адрес</td>
			<td><input type="text" name="add_address"></td>
		</tr>
		<tr>
			<td>Индекс</td>
			<td><input type="text" name="add_postcode"></td>
		</tr>
		<tr>
			<td>Телефон</td>
			<td><input type="text" name="add_phone"></td>
		</tr>
		<tr>
			<td>e-mail</td>
			<td><input type="text" name="add_email"></td>
		</tr>						
		<tr>
			<td><input type="reset" name="reset" value="Очистить"> </td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Добавить"> </td>

	</table>


</form>

<h1>Список пользователей</h1>
	<ul>
	<?php foreach($users as $user): ?>

		<li>
			<a href="/2KTVR-/index.php/deleteuser?id=<?php echo $user['id'];?>">[X]</a>
			<a href="/2KTVR-/index.php/showuser?id=<?php echo $user['id'];?>">
				<?php echo $user['id'].' '.$user['lastname'].', '.$user['firstname']; ?>
			</a>
		</li>
	<?php endforeach; ?>
	</ul>
	

<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>