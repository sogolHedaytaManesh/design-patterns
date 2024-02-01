<?php

namespace DesignPatterns\Decorator\Decorators;

use DesignPatterns\Decorator\Models\User;

class UserDecorator
{
	/**
	 * @param User $user
	 */
	public function __construct(private readonly User $user)
	{
		//
	}

	/**
	 * @return string
	 */
	public function fullName(): string
	{
		return sprintf('%s %s', $this->user->getLastName(), $this->user->getFirstName());
	}
}