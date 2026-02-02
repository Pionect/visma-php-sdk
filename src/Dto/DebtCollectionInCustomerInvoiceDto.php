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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $caseNumber = null,
        public ?string $caseType = null,
        public ?string $caseStatus = null,
        public ?string $caseUrl = null,
    ) {}
}
