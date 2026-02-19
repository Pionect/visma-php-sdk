<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UpdateCurrencyRateDto;
use Pionect\VismaSdk\Enums\CreateCurrencyRateMultDivEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UpdateCurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'rate' => null,
            'multDiv' => $this->faker->randomElement(CreateCurrencyRateMultDivEnum::cases()),
        ];
    }

    protected function modelClass(): string
    {
        return UpdateCurrencyRateDto::class;
    }
}
