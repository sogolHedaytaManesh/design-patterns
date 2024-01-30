<?php

namespace Publishers;

use Message;
use Publisher;

class InstagramPublisher implements Publisher
{
	public function __construct(protected $instagramDependencies)
	{
		//
	}

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