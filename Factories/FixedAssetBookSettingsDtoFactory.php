<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FixedAssetBookSettingsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FixedAssetBookSettingsDtoFactory extends Factory
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
        return FixedAssetBookSettingsDto::class;
    }
}
