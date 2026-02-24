<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierBalanceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SupplierBalanceDto>
 */
class SupplierBalanceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branchNumber' => $this->faker->word(),
            'supplier' => SupplierDescriptionDtoFactory::new()->make(),
            'balance' => null,
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
