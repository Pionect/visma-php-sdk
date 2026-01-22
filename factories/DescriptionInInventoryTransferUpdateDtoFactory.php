<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DescriptionInInventoryTransferUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DescriptionInInventoryTransferUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DescriptionInInventoryTransferUpdateDto::class;
    }
}
