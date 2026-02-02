<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomDec2inShipmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomDec2inShipmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CustomDec2inShipmentUpdateDto::class;
    }
}
