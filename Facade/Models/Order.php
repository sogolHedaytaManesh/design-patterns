<?php

namespace DesignPatterns\Decorator\Models;

class Order
{
	/**
	 * @param int $userId
	 * @param string $amount
	 * @param string $coupon
	 */
	public function __construct(
		private readonly int $userId,
		private readonly string $amount,
		private readonly string $coupon,
	) {
		//
	}

	public static function create($userId, $amount, $coupon)
	{
		return new self($userId, $amount, $coupon);
	}

	/**
	 * @return string
	 */
	public function getAmount(): string
	{
		return $this->amount;
	}

	/**
	 * @return string
	 */
	public function getCoupon(): string
	{
		return $this->coupon;
	}

	/**
	 * @return int
	 */
	public function getUserId(): int
	{
		return $this->userId;
	}
}