<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return CustomerClassDto::class;
    }
}
