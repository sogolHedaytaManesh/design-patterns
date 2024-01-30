<?php

namespace DesignPatterns\Factory\Factories\Publishers;

use DesignPatterns\Factory\Message;
use DesignPatterns\Factory\Publisher;

class LinkedInPublisher implements Publisher
{
	/**
	 * @param Message $message
	 * @return void
	 */
	public static function publish(Message $message): void
	{
		echo sprintf(
			"Title: %s - Content:%s From: %s ",
			$message->getTitle(),
			$message->getContent(),
			get_class(self::class)
		);
	}
}