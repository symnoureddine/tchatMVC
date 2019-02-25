<?php

namespace App\Controllers;

use App\Models\Message;
use App\Repository\AppRepository;


class IndexController {
	
	public function indexAction(){
		$repository=  new AppRepository();

		$repository->renderView("login.php",[]);
	}
}