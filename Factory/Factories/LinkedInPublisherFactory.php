<?php

use DesignPatterns\Factory\MessagePublisher;
use DesignPatterns\Factory\Publisher;
use DesignPatterns\Factory\Factories\Publishers\LinkedInPublisher;

class LinkedInPublisherFactory extends MessagePublisher
{
	/**
	 * @return Publisher
	 */
	protected function createPublisher(): Publisher
	{
		return new LinkedInPublisher();
	}
}