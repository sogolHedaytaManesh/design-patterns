<?php

namespace DesignPatterns\Decorator;

use DesignPatterns\Decorator\Decorators\ReportDecorator;

class ReportWithFooter extends ReportDecorator
{
	/**
	 * @return string
	 */
	public function generate(): string
	{
		return <<<FOOTER
					Footer Report
					{$this->reportService->generate()}
			FOOTER;
	}
}