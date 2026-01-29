<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Debt Collection information
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DebtCollectionInCustomerInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DebtCollectionInCustomerInvoiceDtoFactory factory()
 */
class DebtCollectionInCustomerInvoiceDto extends Model
{
    /** Debt Collection Case Number */
    #[Property]
    public ?string $caseNumber;

    /** Debt Collection Case Number */
    #[Property]
    public ?string $caseType;

    /** Debt Collection Case Number */
    #[Property]
    public ?string $caseStatus;

    /** Debt Collection Case Number */
    #[Property]
    public ?string $caseUrl;
}
