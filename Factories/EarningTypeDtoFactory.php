<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\EarningTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\EarningTypeDto>
 */
class EarningTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'code' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'isOvertime' => $this->faker->boolean(),
            'isBillable' => $this->faker->boolean(),
            'isActive' => $this->faker->boolean(),
            'overtimeMultiplier' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return EarningTypeDto::class;
    }
}
