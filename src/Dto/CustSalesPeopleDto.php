<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustSalesPeopleDto extends Model
{
    #[Property]
    public ?int $bAccountId;

    #[Property]
    public ?string $customerName;

    #[Property]
    public ?int $locationId;

    #[Property]
    public ?string $locationName;

    #[Property]
    public ?bool $isDefault;

    #[Property]
    public ?float $commisionPct;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $errorInfo;
}
