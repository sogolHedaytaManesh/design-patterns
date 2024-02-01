<?php

namespace DesignPatterns\Decorator;

use DesignPatterns\Decorator\Decorators\ReportDecorator;

class ReportWithHeader extends ReportDecorator
{
	/**
	 * @return string
	 */
	public function generate(): string
	{
		return <<<REPORT
					Header Report
					{$this->reportService->generate()}
			REPORT;
	}
}