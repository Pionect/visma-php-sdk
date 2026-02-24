<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PurchaseReceiptOrderLinesListUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PurchaseReceiptOrderLinesListUpdateDto>
 */
class PurchaseReceiptOrderLinesListUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'purchaseOrderLines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptOrderLinesListUpdateDto::class;
    }
}
