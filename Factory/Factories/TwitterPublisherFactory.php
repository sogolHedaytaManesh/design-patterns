<?php

use Publishers\TwitterPublisher;

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