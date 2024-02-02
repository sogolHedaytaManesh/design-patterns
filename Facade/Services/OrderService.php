<?php

namespace DesignPatterns\Facade\Services;

use DesignPatterns\Decorator\Models\Order;
use DesignPatterns\Facade\Basket;
use RuntimeException;

class OrderService
{
	/**
	 * @param DiscountService $discountService
	 * @param QuantityService $quantityService
	 */
	public function __construct(
		private readonly DiscountService $discountService,
		private readonly QuantityService $quantityService
	) {
		//
	}

	/**
	 * @param Basket $basket
	 * @return RuntimeException|Order
	 */
	public function register(Basket $basket): RuntimeException|Order
	{
		foreach ($basket->getItems() as $product) {
			if (!$this->quantityService->exist($product)) {
				return new RuntimeException('The product Does Not Exists.');
			}
		}

		$amount = $this->discountService->apply($basket->coupon());

		return Order::create(userId: 1, amount: $amount, coupon: $basket->coupon());
	}
}