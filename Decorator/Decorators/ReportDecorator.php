<?php

namespace DesignPatterns\Decorator\Decorators;

use DesignPatterns\Decorator\Contracts\ReportGeneratorContract;

abstract class ReportDecorator implements ReportGeneratorContract
{
	public function __construct(protected readonly ReportGeneratorContract $reportService)
	{
		//
	}
}