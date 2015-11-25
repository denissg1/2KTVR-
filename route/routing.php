<?php
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	//echo "<br> uri=".$_SERVER['REQUEST_URI'];
	//$s = explode('?', $_SERVER['REQUEST_URI']);
	//$uri = $s[0];
	//$uri = rtrim($uri, '/');
	//echo $uri;
	$request = Request::createFromGlobals();
	$uri = $request->getPathInfo();

	if ($uri == '/post')
	{
		$postcontroller = new PostController();
		$response = $postcontroller->list_action();
	}

	elseif ($uri == '/showpost' && $request->query->has('id'))
	{
		$postcontroller = new PostController();
		$response = $postcontroller->show_action($request->query->get('id'));
	}

	elseif ($uri == '/adminpost')
	{
		$postcontroller = new PostController();
		$response = $postcontroller->admin_action();
	}

	elseif ($uri == '/addpost')
	{
		$postcontroller = new PostController();
		$response = $postcontroller->add_action();
	}

	elseif ($uri == '/deletepost' && $request->query->has('id'))
	{
		$postcontroller = new PostController();
		$response = $postcontroller->delete_action($request->query->get('id'));
	}

	elseif ($uri == '/about')
	{
		$postcontroller = new PostController();
		$response = $postcontroller->about_action();
	}




	elseif ($uri == '/user')
	{
		$usercontroller = new UserController();
		$response = $usercontroller->list_action();
	}

	elseif ($uri == '/showuser' && $request->query->has('id'))
	{
		$usercontroller = new UserController();
		$response = $usercontroller->show_action($request->query->get('id'));
	}

	elseif ($uri == '/adminuser')
	{
		$usercontroller = new UserController();
		$response = $usercontroller->admin_action();
	}

	elseif ($uri == '/adduser')
	{
		$usercontroller = new UserController();
		$response = $usercontroller->add_action();
	}

	elseif ($uri == '/deleteuser' && $request->query->has('id'))
	{
		$usercontroller = new UserController();
		$response = $usercontroller->delete_action($request->query->get('id'));
	}


