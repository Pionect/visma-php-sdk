<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerCreditWriteOffDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerCreditWriteOffDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'hold' => $this->faker->boolean(),
            'roundingDiff' => null,
            'customerVatZone' => null,
            'timeStamp' => $this->faker->word(),
            'customer' => null,
            'documentType' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'closedFinancialPeriod' => $this->faker->word(),
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'status' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'amount' => null,
            'amountInCurrency' => null,
            'balance' => null,
            'balanceInCurrency' => null,
            'cashDiscount' => null,
            'cashDiscountInCurrency' => null,
            'paymentMethod' => null,
            'customerRefNumber' => $this->faker->word(),
            'invoiceText' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'vatTotal' => null,
            'vatTotalInCurrency' => null,
            'location' => null,
            'branchNumber' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'project' => null,
            'account' => null,
            'subaccount' => null,
            'customerProject' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerCreditWriteOffDto::class;
    }
}
