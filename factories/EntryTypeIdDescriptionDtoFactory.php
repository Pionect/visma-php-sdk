<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EntryTypeIdDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EntryTypeIdDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return EntryTypeIdDescriptionDto::class;
    }
}
