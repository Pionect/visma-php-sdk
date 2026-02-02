<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxCategoryInTransactionDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxCategoryInTransactionDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TaxCategoryInTransactionDetailDto::class;
    }
}
