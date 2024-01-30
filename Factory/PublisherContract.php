<?php

namespace DesignPatterns\Factory;

interface PublisherContract
{
	/**
	 * @param Message $message
	 * @return void
	 */
	public static function publish(Message $message): void;
}