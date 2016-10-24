<?php

use \Core\Page;
use \Core\View;

class Index extends Page{
	public function home(){
		$data = $this->getData();

		$_SESSION['information'] = [
			'title' => 'Mr',
			'name' => 'Beaujean',
			'firstname' => 'Fabien',
			'email' => 'fabien.beaujean@hotmail.fr',
			'street' => '1 allée des mûriers',
			'city' => 'Verrières-le-Buisson',
			'zip' => '91370',
			'country' => 'France'
		];

		return (new View('index/home.php'))
			->assign('title', 'home')
			->assign('data', $data)
			->render();
	}

	public function policy(){
		$data = $this->getData();

		return (new View('index/policy.php'))
			->assign('title', 'policy')
			->assign('data', $data)
			->render();
	}

	public function contact(){
		$data = $this->getData();

		return (new View('index/contact.php'))
			->assign('title', 'contact')
			->assign('data', $data)
			->render();
	}

	private function getData(){
		return json_decode(file_get_contents('data.json'), true);
	}
}