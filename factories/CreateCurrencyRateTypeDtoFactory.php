<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreateCurrencyRateTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreateCurrencyRateTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => IdInCreateCurrencyRateTypeDtoFactory::new()->make(),
            'description' => DescriptionInCreateCurrencyRateTypeDtoFactory::new()->make(),
            'daysEffective' => DaysEffectiveInCreateCurrencyRateTypeDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return CreateCurrencyRateTypeDto::class;
    }
}
