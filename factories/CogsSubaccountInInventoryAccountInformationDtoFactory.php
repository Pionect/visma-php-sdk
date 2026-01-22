<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CogsSubaccountInInventoryAccountInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CogsSubaccountInInventoryAccountInformationDtoFactory extends Factory
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
        return CogsSubaccountInInventoryAccountInformationDto::class;
    }
}
