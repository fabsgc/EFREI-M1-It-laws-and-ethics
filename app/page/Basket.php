<?php

use \Core\Page;
use \Core\View;

class Basket extends Page{
	public function home(){
		$data = $this->getData();

		return (new View('basket/home.php'))
			->assign('title', 'basket')
			->assign('data', $data)
			->render();
	}

	public function add(){
		$data = $this->getData();
	}

	public function edit(){
		$data = $this->getData();
	}

	public function delete(){
		$data = $this->getData();
	}

	private function getData(){
		return json_decode(file_get_contents('data.json'), true);
	}
}