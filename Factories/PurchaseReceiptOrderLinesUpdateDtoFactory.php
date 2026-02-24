<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PurchaseReceiptOrderLinesUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PurchaseReceiptOrderLinesUpdateDto>
 */
class PurchaseReceiptOrderLinesUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderNbr' => $this->faker->word(),
            'lines' => [],
            'allocations' => [],
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptOrderLinesUpdateDto::class;
    }
}
