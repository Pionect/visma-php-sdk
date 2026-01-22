<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OffsetSubaccountOverrideInEntryTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OffsetSubaccountOverrideInEntryTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return OffsetSubaccountOverrideInEntryTypeDto::class;
    }
}
