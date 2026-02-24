<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerContractDetailsLineDto;
use Pionect\VismaSdk\Enums\CustomerContractDetailsLineInvoiceTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerContractDetailsLineDto>
 */
class CustomerContractDetailsLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'contractDetailId' => $this->faker->numberBetween(1, 1000),
            'itemCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'included' => null,
            'difference' => null,
            'setupPrice' => null,
            'setupDiscount' => null,
            'recurringPrice' => null,
            'extraUsagePrice' => null,
            'recurringDiscount' => null,
            'renewalPrice' => null,
            'renewalDiscount' => null,
            'invoiceType' => $this->faker->randomElement(CustomerContractDetailsLineInvoiceTypeEnum::cases()),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractDetailsLineDto::class;
    }
}
