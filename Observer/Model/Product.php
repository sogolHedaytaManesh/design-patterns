<?php

namespace DesignPatterns\Observer\Models;

use DesignPatterns\Observer\Observers\ProductObserver;
use SplObjectStorage;
use SplObserver;

class Product implements \SplSubject
{
	/**
	 * @var SplObjectStorage
	 */
	private readonly SplObjectStorage $objectStorage;

	/**
	 * @param int $price
	 */
	public function __construct(private int $price)
	{
		$this->objectStorage = new SplObjectStorage();
	}

	/**
	 * @return int
	 */
	public function getPrice(): int
	{
		return $this->price;
	}

	/**
	 * @param int $newPrice
	 * @return void
	 */
	public function changePrice(int $newPrice): void
	{
		if ($this->price === $newPrice || $newPrice < 0) {
			throw new \RuntimeException('invalid Price');
		}

		$this->price = $newPrice;
		$this->notify();
	}

	/**
	 * @param SplObserver $observer
	 * @return void
	 */
	public function attach(SplObserver $observer): void
	{
		$this->objectStorage->attach($observer);
	}

	/**
	 * @param SplObserver $observer
	 * @return void
	 */
	public function detach(SplObserver $observer): void
	{
		$this->objectStorage->detach($observer);
	}

	/**
	 * @return void
	 */
	public function notify(): void
	{
		foreach ($this->objectStorage as $observer) {
			$observer->update($this);
		}
	}

	/**
	 * @return void
	 */
	public function attachProductObserver(): void
	{
		$this->attach(new ProductObserver());
	}

	/**
	 * @return void
	 */
	public function detachProductObserver(): void
	{
		$this->attach(new ProductObserver());
	}
}