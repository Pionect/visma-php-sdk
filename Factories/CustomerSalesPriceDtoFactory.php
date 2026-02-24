<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerSalesPriceDto;
use Pionect\VismaSdk\Enums\CustomerSalesPriceQueryParametersPriceTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerSalesPriceDto>
 */
class CustomerSalesPriceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'recordId' => $this->faker->numberBetween(1, 1000),
            'priceType' => $this->faker->randomElement(CustomerSalesPriceQueryParametersPriceTypeEnum::cases()),
            'priceCode' => $this->faker->word(),
            'inventoryId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'uoM' => $this->faker->word(),
            'promotion' => $this->faker->boolean(),
            'breakQty' => null,
            'price' => null,
            'currency' => $this->faker->word(),
            'vat' => $this->faker->word(),
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'warehouse' => $this->faker->word(),
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerSalesPriceDto::class;
    }
}
