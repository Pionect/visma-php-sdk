<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierDocumentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierDocumentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'account' => $this->faker->word(),
            'subaccount' => $this->faker->word(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'amountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'branch' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'documentType' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'approvalStatus' => $this->faker->word(),
            'status' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'balanceInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscount' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'paymentMethod' => $this->faker->word(),
            'supplierReference' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'closedFinancialPeriod' => $this->faker->word(),
            'location' => $this->faker->word(),
            'vatTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'branchNumber' => $this->faker->word(),
            'payDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'paymentMessage' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierDocumentDto::class;
    }
}
