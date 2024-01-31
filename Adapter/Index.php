<?php

namespace DesignPatterns\Adapter;

use DesignPatterns\Adapter\Models\Invoice;
use DesignPatterns\Adapter\Providers\XProviderAdapter;

class Index
{
	/**
	 * @param XProviderAdapter $XProviderAdapter
	 */
	public function __construct(public readonly XProviderAdapter $XProviderAdapter)
	{
		$this->publishMessage();
	}

	/**
	 * @return void
	 */
	public function publishMessage(): void
	{
		$this->XProviderAdapter->echoPay(new Invoice(5000));
	}

}