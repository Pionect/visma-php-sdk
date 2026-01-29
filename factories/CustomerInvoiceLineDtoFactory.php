<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerInvoiceLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInvoiceLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'termStartDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'termEndDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'isRotRutDeductible' => $this->faker->boolean(),
            'itemType' => $this->faker->word(),
            'typeOfWork' => WorkTypeDtoFactory::new()->make(),
            'deductableAmount' => $this->faker->randomFloat(2, 0, 1000),
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
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitPrice' => $this->faker->randomFloat(2, 0, 1000),
            'unitPriceInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'manualAmount' => $this->faker->randomFloat(2, 0, 1000),
            'manualAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'cost' => $this->faker->randomFloat(2, 0, 1000),
            'amountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'account' => AccountInCustomerInvoiceLineDtoFactory::new()->make(),
            'vatCode' => VatCodeInCustomerInvoiceLineDtoFactory::new()->make(),
            'uom' => $this->faker->word(),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'manualDiscount' => $this->faker->boolean(),
            'subaccount' => SubaccountInCustomerInvoiceLineDtoFactory::new()->make(),
            'salesperson' => $this->faker->word(),
            'seller' => SellerInCustomerInvoiceLineDtoFactory::new()->make(),
            'deferralSchedule' => $this->faker->numberBetween(1, 100),
            'deferralCode' => $this->faker->word(),
            'discountCode' => $this->faker->word(),
            'note' => $this->faker->word(),
            'branchNumber' => BranchNumberInCustomerInvoiceLineDtoFactory::new()->make(),
            'externalLink' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInvoiceLineDto::class;
    }
}
