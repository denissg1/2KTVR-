<?php
class UserModel extends DBH {
	

	//--------------------------------------------------------------------------------------

	public function get_all_users()
	{
		$sql = 'SELECT `id`, `firstname`, `lastname` FROM user ORDER BY `id`';
		$stmt = $this->getDBH()->query($sql);
		$users = array();
		while ($row = $stmt->fetch())
		{
			$users[] = $row;
		}
		return $users;
	}

	//-------------------------------------------------------------------------------------

	public function get_user_by_id($id)
	{
		$sql = "SELECT `isikukood`, `firstname`, `lastname`, `address`, `postcode`, `phone`, `email` 
		FROM user WHERE `id` = ?";
		$stmt = $this->getDBH()->prepare($sql); //подготовка места для переменных
		$stmt->execute(array($id)); //присваивает значения в соответствующие места
		foreach ($stmt as $value)
		{
			$user = $value;
		}
		return $user;
	}

	//--------------------------------------------------------------------------------------

	public function add_user()
	{
		if (!empty($_REQUEST['add_isikukood']) && !empty($_REQUEST['add_firstname']) && 
			!empty($_REQUEST['add_lastname']) && !empty($_REQUEST['add_address']) &&
			!empty($_REQUEST['add_postcode']))
		{
			$add_isikukood = $_REQUEST['add_isikukood'];
			$add_firstname = $_REQUEST['add_firstname'];
			$add_lastname = $_REQUEST['add_lastname'];
			$add_address = $_REQUEST['add_address'];
			$add_postcode = $_REQUEST['add_postcode'];
			$add_phone = $_REQUEST['add_phone'];
			$add_email = $_REQUEST['add_email'];			
			$sql = "INSERT INTO user (`isikukood`, `firstname`, `lastname`, `address`,
					`postcode`, `phone`, `email`) 
					VALUES (?, ?, ?, ?, ?, ?, ?)";
			$stmt = $this->getDBH()->prepare($sql);
			$stmt->execute(array($add_isikukood, $add_firstname, $add_lastname, $add_address,
								 $add_postcode, $add_phone, $add_email));
			return true;
		}
		else
		{
			echo 'Данные не введены!';
		}
	}

	//--------------------------------------------------------------------------------------

	public function delete_user_by_id($id)
	{
		$sql = "DELETE FROM user WHERE id = ?";
		$stmt = $this->getDBH()->prepare($sql);
		$stmt->execute([$id]);
		return $stmt;
	}

}