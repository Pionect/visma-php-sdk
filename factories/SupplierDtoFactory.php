<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return SupplierDto::class;
    }
}
