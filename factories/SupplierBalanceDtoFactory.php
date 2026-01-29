<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierBalanceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierBalanceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branchNumber' => $this->faker->word(),
            'supplier' => SupplierDescriptionDtoFactory::new()->make(),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'unreleasedPurchasesNotInApproval' => WithoutWithVatDtoFactory::new()->make(),
            'totalSentForApproval' => WithoutWithVatDtoFactory::new()->make(),
            'totalPurchaseInvoicePeriod' => WithoutWithVatDtoFactory::new()->make(),
            'totalPurchaseInvoiceYear' => WithoutWithVatDtoFactory::new()->make(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierBalanceDto::class;
    }
}
