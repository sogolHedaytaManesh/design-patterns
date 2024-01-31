<?php

namespace DesignPatterns\Builder;

class RequestBuilder
{
	private string $uri;
	private string $data;
	private string $headers;
	private array $queryString;
	private string $method;

	/**
	 * @param string $method
	 */
	public function setMethod(string $method): void
	{
		$this->method = $method;
	}

	/**
	 * @return RequestBuilder
	 */
	public static function forge(): RequestBuilder
	{
		return new self();
	}

	/**
	 * @param string $uri
	 * @return RequestBuilder
	 */
	public function withUri(string $uri): RequestBuilder
	{
		$this->uri = $uri;

		return $this;
	}

	/**
	 * @param string $data
	 * @return RequestBuilder
	 */
	public function withData(string $data): RequestBuilder
	{
		$this->data = $data;

		return $this;
	}

	/**
	 * @param string $method
	 * @return RequestBuilder
	 */
	public function withMethod(string $method): RequestBuilder
	{
		$this->method = $method;

		return $this;
	}

	/**
	 * @param array $queryString
	 * @return RequestBuilder
	 */
	public function withQueryString(array $queryString): RequestBuilder
	{
		$this->queryString = $queryString;

		return $this;
	}

	/**
	 * @param string $headers
	 * @return RequestBuilder
	 */
	public function withHeaders(string $headers): RequestBuilder
	{
		$this->headers = $headers;

		return $this;
	}

	/**
	 * @return Request
	 */
	public function build(): Request
	{
		return new Request($this);
	}
}