<?php

namespace DesignPatterns\Decorator;

use DesignPatterns\Decorator\Contracts\ReportGeneratorContract;

class ReportService implements ReportGeneratorContract
{
	/**
	 * @return string
	 */
	public function generate(): string
	{
		return 'total amount: 45.000$';
	}
}