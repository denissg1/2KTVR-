<?php
	use Symfony\Component\HttpFoundation\Response;

class UserController 
{
	public function render_template($path, array $args)
	{
		extract($args);
		ob_start();
		require $path;
		$html = ob_get_clean();
		return $html;
	}

	//------------------------------------------------------------------------------------

	public function list_action()
	{
		$usermodel = new UserModel();
		$users = $usermodel->get_all_rows();
		$html = $this->render_template("view/template/listuser.php", array('users' => $users));
		return new Response($html);
	}

	//------------------------------------------------------------------------------------

	public function show_action($id)
	{
		$usermodel = new UserModel();
		$user = $usermodel->get_row_by_id($id);
		$html = $this->render_template("view/template/showuser.php", array('user' => $user));
		return new Response($html);
	}

	//-----------------------------------------------------------------------------------

	public function admin_action()
	{
		$usermodel = new UserModel();
		$users = $usermodel->get_all_rows();
		$html = $this->render_template("view/template/adminuser.php", array('users' => $users));
		return new Response($html);
	}

	//-----------------------------------------------------------------------------------

	public function add_action()
	{
		$usermodel = new UserModel();
		$usermodel->add_user();
		$users = $usermodel->get_all_rows();
		$html = $this->render_template("view/template/adminuser.php", array('users'=>$users));
		return new Response($html);
	}

	//-----------------------------------------------------------------------------------

	public function delete_action($id)
	{
		$usermodel = new UserModel();
		$usermodel->delete_row_by_id($id);
		$users = $usermodel->get_all_rows();
		$html = $this->render_template("view/template/adminuser.php", array('users'=>$users));
		return new Response($html);
	}

	//-----------------------------------------------------------------------------------

	function about_action()
	{
		$html = $this->render_template("view/template/about.php", array());
		return new Response($html);
		//require 'view/template/about.php';
	}


}

	

