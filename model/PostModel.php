<?php
class PostModel extends DBH {


	public function PostModel()
	{
		parent::DBH('post');
	}


	public function get_post_by_id($id)
	{
		$sql = "SELECT `date`, `title`, `content`, `autor` FROM post WHERE `id` = ?";
		$stmt = $this->getDBH()->prepare($sql); //подготовка места для переменных
		$stmt->execute([$id]); //присваивает значения в соответствующие места
		
		$post = $stmt->fetch();
		return $post;
	}

	//--------------------------------------------------------------------------------------

	public function add_post()
	{
		if (!empty($_REQUEST['add_autor']) && !empty($_REQUEST['add_date']) && 
			!empty($_REQUEST['add_title']) && !empty($_REQUEST['add_content']))
		{
			$add_autor = $_REQUEST['add_autor'];
			$add_date = $_REQUEST['add_date'];
			$add_title = $_REQUEST['add_title'];
			$add_content = $_REQUEST['add_content'];
			$sql = "INSERT INTO post (`date`, `autor`, `title`, `content`) 
					VALUES (?, ?, ?, ?)";
			$stmt = $this->getDBH()->prepare($sql);
			$stmt->execute(array($add_autor, $add_date, $add_title, $add_content));
			return true;
		}
		else
		{
			echo 'Данные не введены!';
		}
	}

	//--------------------------------------------------------------------------------------



}