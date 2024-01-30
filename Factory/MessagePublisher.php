<?php

abstract class MessagePublisher
{
	/**
	 * @param Message $message
	 * @return void
	 */
	public function publish(Message $message): void
	{
		$publisher = $this->createPublisher();

		$publisher::publish($message);
	}

	/**
	 * @return Publisher
	 */
	protected function createPublisher(): Publisher
	{
		$className = __NAMESPACE__ . '\\Factories\\' . 'LinkedInPublisherFactory';

		return new $className();
	}
}