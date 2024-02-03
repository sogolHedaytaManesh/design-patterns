<?php

namespace DesignPatterns\Observer\Observers;

use SplSubject;

class ProductObserver implements \SplObserver
{

	public function update(SplSubject $subject): void
	{
		$newPrice = $subject->getPrice();
		// TODO  update products table   ID set price = `$newPrice` where ID= `$subject->id`;
	}
}