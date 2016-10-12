<?php

use \Core\Page;
use \Core\View;

class Payment extends Page{
	public function home(){
		return (new View('index/home.php'))->render();
	}

	public function pay(){
		return (new View('index/pay.php'))->render();
	}

	public function thanks(){
		return (new View('index/thanks.php'))->render();
	}
}