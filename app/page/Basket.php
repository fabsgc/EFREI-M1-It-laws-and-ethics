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
		$item = $_GET['item'];

		if(isset($data[$item])){
			if(isset($_SESSION['items'][$item])){
				$_SESSION['items'][$item]['quantity']++;
			}
			else{
				$_SESSION['items'][$item]['quantity'] = 1;
				$_SESSION['items'][$item]['item'] = $data[$item];
			}
		}

		header('location:/'.\Core\Url::get('index-home'));
	}

	public function edit(){
		$data = $this->getData();
		$item = $_GET['item'];
		$quantity = $_GET['quantity'];

		if(isset($data[$item])){
			if(isset($_SESSION['items'][$item])){
				$_SESSION['items'][$item]['quantity'] = $quantity;
			}
		}

		header('location:'.\Core\Url::get('basket-home'));
	}

	public function delete(){
		$item = $_GET['item'];
		unset($_SESSION['items'][$item]);

		header('location:'.\Core\Url::get('basket-home'));
	}

	private function getData(){
		return json_decode(file_get_contents('data.json'), true);
	}
}