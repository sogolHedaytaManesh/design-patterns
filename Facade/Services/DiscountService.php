<?php

namespace DesignPatterns\Facade\Services;

use RuntimeException;

class DiscountService
{
	/**
	 * @param string $coupon
	 * @return bool
	 */
	private function isValid(string $coupon): bool
	{
		return true;
	}

	/**
	 * @param string $coupon
	 * @return int
	 */
	public function apply(string $coupon): int
	{
		if (!$this->isValid($coupon)) {
			return new RuntimeException('Invalid Coupon');
		}

		return 100;
	}
}