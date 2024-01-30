<?php

use Publishers\LinkedInPublisher;

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