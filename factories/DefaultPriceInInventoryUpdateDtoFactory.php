<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefaultPriceInInventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefaultPriceInInventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return DefaultPriceInInventoryUpdateDto::class;
    }
}
