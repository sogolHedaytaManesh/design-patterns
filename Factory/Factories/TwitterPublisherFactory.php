<?php

use DesignPatterns\Factory\MessagePublisher;
use DesignPatterns\Factory\PublisherContract;
use DesignPatterns\Factory\Factories\Publishers\TwitterPublisher;

class TwitterPublisherFactory extends MessagePublisher
{
	/**
	 * @return PublisherContract
	 */
	protected function createPublisher(): PublisherContract
	{
		return new TwitterPublisher();
	}
}