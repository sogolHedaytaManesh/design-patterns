<?php

class Message
{
	/**
	 * @param string $title
	 * @param string $content
	 */
	public function __construct(private readonly string $title, private readonly string $content)
	{
		//
	}

	/**
	 * @return string
	 */
	public function getContent(): string
	{
		return $this->content;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}
}