<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DebitAccountGroupInProjectTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DebitAccountGroupInProjectTransactionLineDto>
 */
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
