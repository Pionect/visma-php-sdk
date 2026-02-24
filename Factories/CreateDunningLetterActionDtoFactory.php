<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CreateDunningLetterActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CreateDunningLetterActionDto>
 */
class CreateDunningLetterActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'dunningLetterDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'levelFrom' => $this->faker->numberBetween(1, 100),
            'levelTo' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CreateDunningLetterActionDto::class;
    }
}
