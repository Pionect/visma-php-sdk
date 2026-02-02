<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BaccountIdInSupplierLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BaccountIdInSupplierLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BaccountIdInSupplierLocationUpdateDto::class;
    }
}
