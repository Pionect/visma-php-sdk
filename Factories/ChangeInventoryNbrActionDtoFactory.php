<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ChangeInventoryNbrActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ChangeInventoryNbrActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'inventoryNbr' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ChangeInventoryNbrActionDto::class;
    }
}
