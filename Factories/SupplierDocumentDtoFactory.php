<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierDocumentDto;
use Pionect\VismaSdk\Enums\LandedCostApDocTypeEnum;
use Pionect\VismaSdk\Enums\SupplierInvoiceForSupplierQueryParametersStatusEnum;
use Pionect\VismaSdk\Enums\TimeCardSummaryApprovalStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierDocumentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'account' => null,
            'subaccount' => null,
            'amount' => null,
            'amountInCurrency' => null,
            'branch' => null,
            'supplier' => null,
            'documentType' => $this->faker->randomElement(LandedCostApDocTypeEnum::cases()),
            'referenceNumber' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'approvalStatus' => $this->faker->randomElement(TimeCardSummaryApprovalStatusEnum::cases()),
            'status' => $this->faker->randomElement(SupplierInvoiceForSupplierQueryParametersStatusEnum::cases()),
            'currencyId' => $this->faker->uuid(),
            'balance' => null,
            'balanceInCurrency' => null,
            'cashDiscount' => null,
            'cashDiscountInCurrency' => null,
            'paymentMethod' => null,
            'supplierReference' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'closedFinancialPeriod' => $this->faker->word(),
            'location' => null,
            'vatTotal' => null,
            'vatTotalInCurrency' => null,
            'branchNumber' => BranchNumberDtoFactory::new()->make(),
            'payDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'paymentMessage' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierDocumentDto::class;
    }
}
