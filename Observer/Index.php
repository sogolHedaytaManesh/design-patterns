<?php

namespace DesignPatterns\Observer;

use DesignPatterns\Observer\Models\Product;

class Index
{
	public function __construct()
	{
		$this->callObserver();
	}

	/**
	 * @return void
	 */
	public function callObserver(): void
	{
		$product = new Product(price: 1000);

		$product->attachProductObserver();
		$product->changePrice(100);

		$product->detachProductObserver();
	}
}