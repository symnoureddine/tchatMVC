<?php

namespace App\Controllers;

use App\Repository\AppRepository;
use App\Models\User;
use App\Handlers\UserHandler;

class UserController{

	public function loginAction(){
    
     $repository=  new AppRepository();

        $params = [];
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $username = isset($_POST['login']) ? $_POST['login'] : '';
            $password = isset($_POST['pass']) ? $_POST['pass'] : '';
            $user = new User();
            $user->setUsername($username);
            $user->setPassword($password);

            $userHandler = new UserHandler();
            $loggedIn = $userHandler->login($user);
        
            if ($loggedIn) {
                $repository->chat();
            } else {
                $repository->renderView('login.php',$param=["message"=>"Login ou mot de passe incorrect"]);
            }
        }else
              $repository->renderView('login.php', $params);
	}

	public function registerUserAction(){
      $repository=  new AppRepository();

    	if ('POST' === $_SERVER['REQUEST_METHOD']) {
          $repository->registerAction($_POST["login"],$_POST["pass"]);
    	}
    	else{
    	  $param=['message'=>"","status"=>""];
         $repository->renderView('register.php',$param);
    	 }
  }

  public function logoutAction(){
      $repository =  new AppRepository();

     	if (isset($_SESSION['id'])) {
     	   $repository->update(0);
     	}
     	session_destroy();
         $repository->renderView("login.php",[]);
  }
	
}
