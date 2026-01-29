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
            'branch' => BranchInCustomerDocumentDtoFactory::new()->make(),
            'customer' => CustomerInCustomerDocumentDtoFactory::new()->make(),
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
            'paymentMethod' => PaymentMethodInCustomerDocumentDtoFactory::new()->make(),
            'customerRefNumber' => $this->faker->word(),
            'invoiceText' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'vatTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'location' => LocationInCustomerDocumentDtoFactory::new()->make(),
            'branchNumber' => BranchNumberInCustomerDocumentDtoFactory::new()->make(),
            'cashAccount' => $this->faker->word(),
            'project' => ProjectInCustomerDocumentDtoFactory::new()->make(),
            'account' => AccountInCustomerDocumentDtoFactory::new()->make(),
            'subaccount' => SubaccountInCustomerDocumentDtoFactory::new()->make(),
            'customerProject' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerDocumentDto::class;
    }
}
