<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ContractUsageQueryParameters extends Model
{
    #[Property]
    public ?string $greaterThanValue;

    #[Property]
    public ?int $numberToRead;

    #[Property]
    public ?int $skipRecords;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $lastModifiedDateTimeCondition;
}
