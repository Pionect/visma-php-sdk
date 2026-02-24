<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FirstTimeStartupDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\FirstTimeStartupDto>
 */
class FirstTimeStartupDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'financials' => $this->faker->boolean(),
            'message' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FirstTimeStartupDto::class;
    }
}
