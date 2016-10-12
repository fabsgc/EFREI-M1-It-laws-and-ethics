<?php

use \Core\Page;
use \Core\View;

class Basket extends Page{
	public function home(){
		return (new View('index/home.php'))->render();
	}

	public function add(){

	}

	public function edit(){

	}

	public function delete(){

	}
}