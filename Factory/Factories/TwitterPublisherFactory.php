<?php

use DesignPatterns\Factory\MessagePublisher;
use DesignPatterns\Factory\Publisher;
use DesignPatterns\Factory\Factories\Publishers\TwitterPublisher;

class TwitterPublisherFactory extends MessagePublisher
{
	/**
	 * @return Publisher
	 */
	protected function createPublisher(): Publisher
	{
		return new TwitterPublisher();
	}
}