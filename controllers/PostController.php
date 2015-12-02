<?php

use Symfony\Component\HttpFoundation\Response;

class PostController 
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
		$postmodel = new PostModel();
		$posts = $postmodel->get_all_rows();
		$html = $this->render_template("view/template/listpost.php", array('posts' => $posts));
		return new Response($html);
	}

	//------------------------------------------------------------------------------------

	public function show_action($id)
	{
		$postmodel = new PostModel();
		$post = $postmodel->get_row_by_id($id);
		$html = $this->render_template("view/template/showpost.php", array('post' => $post));
		return new Response($html);
	}

	//-----------------------------------------------------------------------------------

	function admin_action()
	{
		$postmodel = new PostModel();
		$posts = $postmodel->get_all_rows();
		$html = $this->render_template("view/template/adminpost.php", array('posts' => $posts));
		return new Response($html);
	}

	//-----------------------------------------------------------------------------------

	function add_action()
	{
		$postmodel = new PostModel();
		$postmodel->add_post();
		$posts = $postmodel->get_all_rows();
		$html = $this->render_template("view/template/adminpost.php", array('posts'=>$posts));
		return new Response($html);
	}

	//-----------------------------------------------------------------------------------

	function delete_action($id)
	{
		$postmodel = new PostModel();
		$postmodel->delete_row_by_id($id);
		$posts = $postmodel->get_all_rows();
		$html = $this->render_template("view/template/adminpost.php", array('posts'=>$posts));
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


	

