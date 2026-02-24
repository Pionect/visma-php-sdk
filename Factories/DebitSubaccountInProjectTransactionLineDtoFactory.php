<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DebitSubaccountInProjectTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DebitSubaccountInProjectTransactionLineDto>
 */
class DebitSubaccountInProjectTransactionLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DebitSubaccountInProjectTransactionLineDto::class;
    }
}
