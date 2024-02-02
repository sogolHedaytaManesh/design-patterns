<?php

namespace DesignPatterns\Facade;

use DesignPatterns\Decorator\Models\Product;

class Basket
{
	/**
	 * @var
	 */
	private mixed $items;

	/**
	 * @param Product $product
	 * @return void
	 */
	public function add(Product $product): void
	{
		$this->items[] = $product;
	}

	/**
	 * @return string
	 */
	public function coupon(): string
	{
		return 'Coupon';
	}

	/**
	 * @return mixed
	 */
	public function getItems(): mixed
	{
		return $this->items;
	}
}