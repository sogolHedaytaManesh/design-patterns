<?php

namespace DesignPatterns\Facade;

use DesignPatterns\Decorator\Models\Product;
use DesignPatterns\Facade\Services\OrderService;

class index
{
	/**
	 * @param OrderService $orderService
	 * @param Basket $basket
	 */
	public function __construct(private readonly OrderService $orderService, private readonly Basket $basket)
	{
		$this->makeOrder();
	}

	/**
	 * @return void
	 */
	private function makeOrder(): void
	{
		$this->basket->add(new Product());
		$this->basket->add(new Product());
		$this->basket->add(new Product());

		$this->orderService->register($this->basket->getItems());
	}
}