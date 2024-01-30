<?php

interface Publisher
{
	/**
	 * @param Message $message
	 * @return void
	 */
	public static function publish(Message $message): void;
}