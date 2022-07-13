<?php

namespace Strategies;

class Multiplier implements MyStrategyInterface
{
    public function calculate(array $source, int $number): array
    {
        return array_map(
            function ($value) use ($number) {
                return $value * $number;
            }, $source
        );
    }
}
