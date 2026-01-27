<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerDocumentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerDocumentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'documentDueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branch' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'documentType' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'closedFinancialPeriod' => $this->faker->word(),
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'status' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'amountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'balanceInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscount' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'paymentMethod' => $this->faker->word(),
            'customerRefNumber' => $this->faker->word(),
            'invoiceText' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'vatTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'location' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'project' => $this->faker->word(),
            'account' => $this->faker->word(),
            'subaccount' => $this->faker->word(),
            'customerProject' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerDocumentDto::class;
    }
}
