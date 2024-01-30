<?php
namespace DesignPatterns\Factory;

class Index
{
	/**
	 * @param MessagePublisher $messagePublisher
	 */
	public function __construct(public readonly MessagePublisher $messagePublisher)
	{
		$this->publishMessage();
	}

	/**
	 * @return void
	 */
	public function publishMessage(): void
	{
		$this->messagePublisher->publish(new Message('Sample Title', 'Sample Content'));
	}

}