<?php

namespace DesignPatterns\Factory\Factories\Publishers\Dependencies;

class InstagramDependencies
{
	/**
	 * @return string
	 */
	public function type(): string
	{
		return 'API CALL';
	}
}