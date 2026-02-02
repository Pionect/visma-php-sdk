<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UpdateCurrencyRateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UpdateCurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'rate' => null,
            'multDiv' => null,
        ];
    }

    protected function modelClass(): string
    {
        return UpdateCurrencyRateDto::class;
    }
}
