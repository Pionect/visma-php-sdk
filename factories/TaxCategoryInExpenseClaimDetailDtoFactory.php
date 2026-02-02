<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxCategoryInExpenseClaimDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxCategoryInExpenseClaimDetailDtoFactory extends Factory
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
        return TaxCategoryInExpenseClaimDetailDto::class;
    }
}
