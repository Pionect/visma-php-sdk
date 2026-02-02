<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WithoutWithVatDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WithoutWithVatDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'withoutVat' => null,
            'withVat' => null,
        ];
    }

    protected function modelClass(): string
    {
        return WithoutWithVatDto::class;
    }
}
