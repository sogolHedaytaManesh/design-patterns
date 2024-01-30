<?php

use Publishers\InstagramPublisher;

class InstagramPublisherFactory extends MessagePublisher
{
	/**
	 * @return Publisher
	 */
	protected function createPublisher(): Publisher
	{
		return new InstagramPublisher(instagramDependencies: 'instagramDependencies');
	}
}