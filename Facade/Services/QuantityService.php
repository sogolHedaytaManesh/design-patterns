<?php

namespace DesignPatterns\Facade\Services;

use DesignPatterns\Decorator\Models\Product;

class QuantityService
{
	/**
	 * @param Product $product
	 * @return bool
	 */
	public function exist(Product $product): bool
	{
		return true;
	}
}