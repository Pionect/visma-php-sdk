<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Debt Collection information
 *
 * @method static \Pionect\VismaSdk\Factories\DebtCollectionInCustomerInvoiceDtoFactory testFactory()
 */
class DebtCollectionInCustomerInvoiceDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DebtCollectionInCustomerInvoiceDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Debt Collection Case Number */
        public ?string $caseNumber = null,
        /** Debt Collection Case Number */
        public ?string $caseType = null,
        /** Debt Collection Case Number */
        public ?string $caseStatus = null,
        /** Debt Collection Case Number */
        public ?string $caseUrl = null,
    ) {}
}
