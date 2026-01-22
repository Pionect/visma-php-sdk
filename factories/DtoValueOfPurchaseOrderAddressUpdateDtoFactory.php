<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfPurchaseOrderAddressUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfPurchaseOrderAddressUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfPurchaseOrderAddressUpdateDto::class;
    }
}
