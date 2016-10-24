<?php

use \Core\Page;
use \Core\View;

class Payment extends Page{
	public function address(){
		$data = $this->getData();

		return (new View('payment/address.php'))
			->assign('title', 'information')
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

	public function confirm(){
		$data = $this->getData();

		$_SESSION['bank'] = $_POST;

		return (new View('payment/confirm.php'))
			->assign('title', 'confirm')
			->assign('data', $data)
			->render();
	}

	public function thanks(){
		$data = $this->getData();

		$_SESSION = array();

		return (new View('payment/thanks.php'))
			->assign('title', 'thanks')
			->assign('data', $data)
			->render();
	}

	private function getData(){
		return json_decode(file_get_contents('data.json'), true);
	}
}