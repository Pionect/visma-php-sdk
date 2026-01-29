<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TermsInPurchaseOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TermsInPurchaseOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TermsInPurchaseOrderDto::class;
    }
}
