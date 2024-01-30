<?php
namespace DesignPatterns\Factory;

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
	 * @return PublisherContract
	 */
	protected function createPublisher(): PublisherContract
	{
		$className = __NAMESPACE__ . '\\Factories\\' . 'LinkedInPublisherFactory';

		return new $className();
	}
}