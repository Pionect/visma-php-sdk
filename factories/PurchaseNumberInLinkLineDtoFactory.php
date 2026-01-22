<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PurchaseNumberInLinkLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseNumberInLinkLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseNumberInLinkLineDto::class;
    }
}
