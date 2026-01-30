<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Debt Collection information
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DebtCollectionInCustomerInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DebtCollectionInCustomerInvoiceDtoFactory testFactory()
 */
class DebtCollectionInCustomerInvoiceDto extends Model
{
    public function __construct(
        public ?string $caseNumber = null,
        public ?string $caseType = null,
        public ?string $caseStatus = null,
        public ?string $caseUrl = null,
    ) {}
}
