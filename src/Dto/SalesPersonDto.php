<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a salesperson in SalesPersonController. Used for getting data.
 */
class SalesPersonDto extends Model
{
    #[Property]
    public ?string $salespersonId;

    #[Property]
    public ?string $name;

    #[Property]
    public ?bool $isActive;

    #[Property]
    public ?float $commissionPct;

    #[Property]
    public ?SubAccountDescriptionDto $salesSub;

    #[Property]
    public ?array $customers;

    #[Property]
    public ?array $commissionHistory;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $errorInfo;
}
