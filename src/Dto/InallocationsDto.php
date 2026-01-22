<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents Allocation/Kit Allocation. Used for getting data.
 */
class InallocationsDto extends Model
{
    #[Property]
    public ?int $lineNbr;

    #[Property]
    public ?\LocationDescriptionDto $location;

    #[Property]
    public ?string $lotSerialNumber;

    #[Property]
    public ?float $quantity;

    #[Property]
    public ?string $uom;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;
}
