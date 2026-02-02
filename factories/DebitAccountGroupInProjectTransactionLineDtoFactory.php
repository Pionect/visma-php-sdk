<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DebitAccountGroupInProjectTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DebitAccountGroupInProjectTransactionLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return DebitAccountGroupInProjectTransactionLineDto::class;
    }
}
