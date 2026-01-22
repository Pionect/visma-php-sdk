<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ContractUsageDto extends Model
{
    #[Property]
    public ?string $contract;

    /** Transactions not yet invoiced tab or Transaction history tab */
    #[Property]
    public ?array $transaction;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;
}
