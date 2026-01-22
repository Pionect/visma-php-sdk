<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represent a Contract Usage in Contract Usage Controller. Used to pass data to server for
 * creating or updating an Contract Usage
 */
class ContractUsageUpdateDto extends Model
{
    #[Property]
    public ?array $lines;
}
