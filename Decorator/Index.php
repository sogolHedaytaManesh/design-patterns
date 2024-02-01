<?php

namespace DesignPatterns\Decorator;

use DesignPatterns\Decorator\Decorators\UserDecorator;
use DesignPatterns\Decorator\Models\User;

class Index
{
	public function __construct()
	{
		$this->getReport();
	}

	/**
	 * @return void
	 */
	public function getReport(): void
	{
		$report = new ReportService();
		var_dump($report);

		$headerReport = new ReportWithHeader($report);
		var_dump($headerReport);

		$footerReport = new ReportWithFooter($report);
		var_dump($footerReport);

		$user = new User(firstName: 'Sogol', lastName: 'Hedayat Manesh', email: null, registerDate: null);
		var_dump($user);

		$userDecorator = new UserDecorator($user);
		var_dump($userDecorator);
	}
}