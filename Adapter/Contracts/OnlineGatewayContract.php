<?php

namespace DesignPatterns\Adapter\Contracts;

use DesignPatterns\Adapter\Models\Invoice;

interface OnlineGatewayContract
{
	public function echoPay(Invoice $invoice): void;
}