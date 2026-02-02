<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ParentRecordInSupplierDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ParentRecordInSupplierDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return ParentRecordInSupplierDto::class;
    }
}
