<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PurchaseReceiptOrderLineNbrUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptOrderLineNbrUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptOrderLineNbrUpdateDto::class;
    }
}
