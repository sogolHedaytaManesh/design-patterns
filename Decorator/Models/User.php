<?php

namespace DesignPatterns\Decorator\Models;

class User
{
	/**
	 * @param string $firstName
	 * @param string $lastName
	 * @param string|null $email
	 * @param string|null $registerDate
	 */
	public function __construct(
		private readonly string $firstName,
		private readonly string $lastName,
		private readonly ?string $email,
		private readonly ?string $registerDate
	) {
		//
	}

	/**
	 * @return ?string
	 */
	public function getEmail(): ?string
	{
		return $this->email;
	}

	/**
	 * @return string
	 */
	public function getFirstName(): string
	{
		return $this->firstName;
	}

	/**
	 * @return string
	 */
	public function getLastName(): string
	{
		return $this->lastName;
	}

	/**
	 * @return ?string
	 */
	public function getRegisterDate(): ?string
	{
		return $this->registerDate;
	}
}