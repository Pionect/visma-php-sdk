<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfPurchaseOrderReceiptAction;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfPurchaseOrderReceiptActionFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfPurchaseOrderReceiptAction::class;
    }
}
