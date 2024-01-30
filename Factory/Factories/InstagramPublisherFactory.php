<?php

namespace DesignPatterns\Factory\Factories;

use DesignPatterns\Factory\Factories\Publishers\Dependencies\InstagramDependencies;
use DesignPatterns\Factory\Factories\Publishers\InstagramPublisher;
use DesignPatterns\Factory\MessagePublisher;

class InstagramPublisherFactory extends MessagePublisher
{
	/**
	 * @return InstagramPublisher
	 */
	protected function createPublisher(): InstagramPublisher
	{
		return new InstagramPublisher(new InstagramDependencies());
	}
}