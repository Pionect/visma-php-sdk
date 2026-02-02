<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostPeriodInInventoryTransferUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostPeriodInInventoryTransferUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PostPeriodInInventoryTransferUpdateDto::class;
    }
}
