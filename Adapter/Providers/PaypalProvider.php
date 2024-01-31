<?php

namespace DesignPatterns\Adapter\Providers;

use DesignPatterns\Adapter\Contracts\OnlineGatewayContract;
use DesignPatterns\Adapter\Models\Invoice;

class PaypalProvider implements OnlineGatewayContract
{
	/**
	 * @param Invoice $invoice
	 * @return void
	 */
	public function echoPay(Invoice $invoice): void
	{
		echo $invoice->amount();
	}
}