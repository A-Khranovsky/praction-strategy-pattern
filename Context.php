<?php

//namespace App;

use Strategies\MyStrategyInterface;

class Context
{
	private $strategy;

	public function __construct(MyStrategyInterface $strategy)
	{
		$this->strategy = $strategy;
	}

	public function setStrategy(MyStrategyInterface $strategy)
	{
		$this->strategy = $strategy;
	}

	public function calculate(array $source, int $number)
	{
		return $this->strategy->calculate($source, $number);
	}
}