<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerContractDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerContractDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractDto::class;
    }
}
