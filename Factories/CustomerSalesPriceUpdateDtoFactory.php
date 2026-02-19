<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerSalesPriceUpdateDto;
use Pionect\VismaSdk\Enums\CustomerSalesPriceUpdatePriceTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerSalesPriceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'priceType' => $this->faker->randomElement(CustomerSalesPriceUpdatePriceTypeEnum::cases()),
            'priceCode' => $this->faker->word(),
            'inventoryId' => $this->faker->uuid(),
            'uoM' => $this->faker->word(),
            'promotion' => $this->faker->boolean(),
            'breakQty' => null,
            'price' => null,
            'currency' => $this->faker->word(),
            'vat' => $this->faker->word(),
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'warehouse' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerSalesPriceUpdateDto::class;
    }
}
