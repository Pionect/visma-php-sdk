<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefaultOffsetSubaccountInEntryTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefaultOffsetSubaccountInEntryTypeDtoFactory extends Factory
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
        return DefaultOffsetSubaccountInEntryTypeDto::class;
    }
}
