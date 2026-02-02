<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInSupplierDocumentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInSupplierDocumentDtoFactory extends Factory
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
        return BranchInSupplierDocumentDto::class;
    }
}
