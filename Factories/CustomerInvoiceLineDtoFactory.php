<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerInvoiceLineDto;
use Pionect\VismaSdk\Enums\CustomerInvoiceLineItemTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerInvoiceLineDto>
 */
class CustomerInvoiceLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'termStartDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'termEndDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'isRotRutDeductible' => $this->faker->boolean(),
            'itemType' => $this->faker->randomElement(CustomerInvoiceLineItemTypeEnum::cases()),
            'typeOfWork' => WorkTypeDtoFactory::new()->make(),
            'deductableAmount' => null,
            'attachments' => [],
            'projectTask' => ProjectTaskIdDescriptionDtoFactory::new()->make(),
            'lineType' => $this->faker->word(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'soShipmentNbr' => $this->faker->word(),
            'soOrderType' => $this->faker->word(),
            'soOrderNbr' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryNumber' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'quantity' => null,
            'unitPrice' => null,
            'unitPriceInCurrency' => null,
            'manualAmount' => null,
            'manualAmountInCurrency' => null,
            'amount' => null,
            'cost' => null,
            'amountInCurrency' => null,
            'account' => null,
            'vatCode' => null,
            'uom' => $this->faker->word(),
            'discountPercent' => null,
            'discountAmount' => null,
            'discountAmountInCurrency' => null,
            'manualDiscount' => $this->faker->boolean(),
            'subaccount' => null,
            'salesperson' => $this->faker->word(),
            'seller' => null,
            'deferralSchedule' => $this->faker->numberBetween(1, 100),
            'deferralCode' => $this->faker->word(),
            'discountCode' => $this->faker->word(),
            'note' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'externalLink' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInvoiceLineDto::class;
    }
}
