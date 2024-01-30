<?php

namespace DesignPatterns\Factory;

interface Publisher
{
	/**
	 * @param Message $message
	 * @return void
	 */
	public static function publish(Message $message): void;
}