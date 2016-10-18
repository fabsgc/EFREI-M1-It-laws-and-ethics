<?php

use \Core\Page;
use \Core\View;

class Payment extends Page{
	public function home(){
		$data = $this->getData();

		return (new View('payment/home.php'))
			->assign('title', 'payment')
			->assign('data', $data)
			->render();
	}

	public function pay(){
		$data = $this->getData();

		return (new View('payment/pay.php'))
			->assign('title', 'pay')
			->assign('data', $data)
			->render();
	}

	public function thanks(){
		$data = $this->getData();

		return (new View('payment/thanks.php'))
			->assign('title', 'thanks')
			->assign('data', $data)
			->render();
	}

	private function getData(){
		return json_decode(file_get_contents('data.json'), true);
	}
}