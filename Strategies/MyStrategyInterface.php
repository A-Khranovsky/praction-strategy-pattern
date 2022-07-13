<?php

namespace Strategies;

interface MyStrategyInterface
{
	public function calculate(array $source, int $number): array;
}
