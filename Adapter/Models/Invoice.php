<?php

namespace DesignPatterns\Adapter\Models;

class Invoice
{
	/**
	 * @param int $amount
	 */
	public function __construct(private readonly int $amount)
	{
		if ($this->amount <= 0) {
			throw new \InvalidArgumentException('amount must be bigger than Zero');
		}
	}

	/**
	 * @return int
	 */
	public function amount(): int
	{
		return $this->amount;
	}
}