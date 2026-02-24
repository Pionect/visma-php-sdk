<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerContractRecurringSummaryLineDto;
use Pionect\VismaSdk\Enums\CustomerContractRecurringSummaryLineInvoiceTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerContractRecurringSummaryLineDto>
 */
class CustomerContractRecurringSummaryLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'itemCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'itemId' => $this->faker->uuid(),
            'uom' => $this->faker->word(),
            'invoiceType' => $this->faker->randomElement(CustomerContractRecurringSummaryLineInvoiceTypeEnum::cases()),
            'included' => null,
            'recurringPrice' => null,
            'recurringDiscount' => null,
            'extraUsagePrice' => null,
            'unInvoiced' => null,
            'usedTotal' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractRecurringSummaryLineDto::class;
    }
}
