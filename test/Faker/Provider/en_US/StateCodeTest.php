<?php

namespace Faker\Test\Provider\en_US;

use Faker\Provider\en_US\Address;
use Faker\Test\TestCase;

final class StateCodeTest extends TestCase
{
    public function testStateCodeByState(): void
    {
        $stateCode = $this->faker->stateAbbr('Alabama');
        self::assertEquals('AL', $stateCode);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
