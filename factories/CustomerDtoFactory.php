<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return CustomerDto::class;
    }
}
