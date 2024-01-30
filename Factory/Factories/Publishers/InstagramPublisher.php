<?php

namespace DesignPatterns\Factory\Factories\Publishers;

use DesignPatterns\Factory\Factories\Publishers\Dependencies\InstagramDependencies;
use DesignPatterns\Factory\Message;
use DesignPatterns\Factory\Publisher;

class InstagramPublisher implements Publisher
{
	/**
	 * @param InstagramDependencies $instagramDependencies
	 */
	public function __construct(InstagramDependencies $instagramDependencies)
	{
		//
	}

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