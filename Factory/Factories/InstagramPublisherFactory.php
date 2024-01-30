<?php

namespace DesignPatterns\Factory\Factories;

use DesignPatterns\Factory\Factories\Publishers\Dependencies\InstagramDependencies;
use DesignPatterns\Factory\Factories\Publishers\InstagramPublisher;
use DesignPatterns\Factory\MessagePublisher;
use DesignPatterns\Factory\PublisherContract;

class InstagramPublisherFactory extends MessagePublisher
{
	/**
	 * @return PublisherContract
	 */
	protected function createPublisher(): PublisherContract
	{
		return new InstagramPublisher(new InstagramDependencies());
	}
}