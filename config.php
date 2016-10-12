<?php

/**
 * @file : config.php
 * @author : Fabien Beaujean
 * @description : Configuration of the application
 */

define('FOLDER', 'EFREI-M1-It-laws-and-ethics/');

return [
	'database' => [
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'it-laws-and-ethics',
		'enabled' => true
	],

	'routes' => [
		'index-home' => [
			'url' => '(/*)',
			'action' => 'index.home',
			'vars' => [],
			'method' => 'get',
			'logged' => '*',
			'access' => '*'
		],
		'index-cgv' => [
			'url' => '/terms(/*)',
			'action' => 'index.cgv',
			'vars' => [],
			'method' => 'get',
			'logged' => '*',
			'access' => '*'
		],
		'basket-home' => [
			'url' => '/basket(/*)',
			'action' => 'basket.home',
			'vars' => [],
			'method' => 'get',
			'logged' => '*',
			'access' => '*'
		],
		'basket-add' => [
			'url' => '/basket/add/([0-9]+)(/*)',
			'action' => 'basket.add',
			'vars' => ['item'],
			'method' => 'get',
			'logged' => '*',
			'access' => '*'
		],
		'basket-edit' => [
			'url' => '/basket/edit/([0-9]+)/([0-9]+)(/*)',
			'action' => 'basket.edit',
			'vars' => ['item', 'quantity'],
			'method' => 'get',
			'logged' => '*',
			'access' => '*'
		],
		'basket-delete' => [
			'url' => '/basket/delete/([0-9]+)(/*)',
			'action' => 'basket.delete',
			'vars' => ['item'],
			'method' => 'get',
			'logged' => '*',
			'access' => '*'
		],
		'payment-home' => [
			'url' => '/payment(/*)',
			'action' => 'payment.home',
			'vars' => [],
			'method' => 'get',
			'logged' => '*',
			'access' => '*'
		],
		'payment-pay' => [
			'url' => '/payment/pay(/*)',
			'action' => 'payment.pay',
			'vars' => [],
			'method' => 'get',
			'logged' => '*',
			'access' => '*'
		],
		'payment-thanks' => [
			'url' => '/payment/thanks(/*)',
			'action' => 'payment.thanks',
			'vars' => [],
			'method' => 'post',
			'logged' => '*',
			'access' => '*'
		]
	],

	'firewall' => [
		'redirect' => [
			'login' => 'index-home',
			'default' => 'index-home',
		],
		'csrf' => [
			'name' => 'token',
			'enabled' => true
		],
		'error' => 'core/error.php',
		'logged' => 'logged',
		'role' => 'status'
	]
];