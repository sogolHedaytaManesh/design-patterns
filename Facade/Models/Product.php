<?php

namespace DesignPatterns\Decorator\Models;

class Product
{
	/**
	 * @return int
	 */
	public function price(): int
	{
		return 1000;
	}
}