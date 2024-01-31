<?php

namespace DesignPatterns\Adapter\Providers;

use DesignPatterns\Adapter\Contracts\OnlineGatewayContract;
use DesignPatterns\Adapter\Models\Invoice;

class XProviderAdapter implements OnlineGatewayContract
{
	/**
	 * @param XProviderPackage $XProviderPackage
	 */
	public function __construct(private readonly XProviderPackage $XProviderPackage)
	{
		//
	}

	/**
	 * @param Invoice $invoice
	 * @return void
	 */
	public function echoPay(Invoice $invoice): void
	{
		$this->XProviderPackage->Inquiry((string)$invoice->amount());
	}
}