<?php

namespace App\Controllers;

use App\Models\Message;
use App\Repository\AppRepository;


class MessageController {

	public function registerMessageAction(){

		$repository = new AppRepository();
         
		if ('POST' === $_SERVER['REQUEST_METHOD']) {
			$message= new Message();
			$message->add($_POST["msg"],$_SESSION['id']);
			$repository->chat();

		}
	}
}