<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatCodeInInventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCodeInInventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VatCodeInInventoryUpdateDto::class;
    }
}
