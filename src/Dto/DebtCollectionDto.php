<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Debt Collection information for an invoice
 */
class DebtCollectionDto extends Model
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
