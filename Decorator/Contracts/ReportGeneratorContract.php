<?php

namespace DesignPatterns\Decorator\Contracts;

use DesignPatterns\Adapter\Models\Invoice;

interface ReportGeneratorContract
{
	public function generate(): string;
}