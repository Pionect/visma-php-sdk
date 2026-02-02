<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BookSettingsInFixedAssetClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BookSettingsInFixedAssetClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'bookId' => $this->faker->uuid(),
            'depreciationMethodId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return BookSettingsInFixedAssetClassDto::class;
    }
}
