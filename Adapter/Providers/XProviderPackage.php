<?php

namespace DesignPatterns\Adapter\Providers;

class XProviderPackage
{
	/**
	 * @var string
	 */
	private static $api;

	public function __construct()
	{
		$this->api = 'X Provider API';
	}

	/**
	 * @param string $amount
	 * @return string
	 */
	public function Inquiry(string $amount): string
	{
		return sprintf('Success Transaction By:%s', $amount);
	}
}