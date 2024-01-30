<?php

use DesignPatterns\Factory\MessagePublisher;
use DesignPatterns\Factory\PublisherContract;
use DesignPatterns\Factory\Factories\Publishers\LinkedInPublisher;

class LinkedInPublisherFactory extends MessagePublisher
{
	/**
	 * @return PublisherContract
	 */
	protected function createPublisher(): PublisherContract
	{
		return new LinkedInPublisher();
	}
}