<?php

namespace DesignPatterns\Builder;

class Request
{
	private object $builder;

	/**
	 * @param RequestBuilder $requestBuilder
	 */
	public function __construct(RequestBuilder $requestBuilder)
	{
		$builder = new \ReflectionClass($requestBuilder);
	}

	/**
	 * @return string
	 */
	public function run(): string
	{
		return 'Sample Response';
	}
}