<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\VatCategoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCategoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'vatCategoryId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'active' => $this->faker->boolean(),
            'excludeListedTaxes' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'vatCategoryLines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return VatCategoryDto::class;
    }
}
