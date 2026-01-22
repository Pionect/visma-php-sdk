<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return SupplierClassDto::class;
    }
}
