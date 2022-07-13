<?php

namespace Strategies;

class Adder implements MyStrategyInterface
{
	public function calculate(array $source, int $number): array
	{
		return array_map(function($value) use($number){
			return $value + $number;
		}, $source);
	}
}
