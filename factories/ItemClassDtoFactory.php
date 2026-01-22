<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ItemClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ItemClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return ItemClassDto::class;
    }
}
