<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomDec1inShipmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomDec1inShipmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CustomDec1inShipmentUpdateDto::class;
    }
}
