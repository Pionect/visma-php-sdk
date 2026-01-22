<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class EarningTypeDto extends Model
{
    /** Mandatory field: Code* &gt; The unique ID of the type of hour. */
    #[Property]
    public ?string $code;

    /** Mandatory field: Description &gt; The brief description of the type of hour. */
    #[Property]
    public ?string $description;

    /** Overtime &gt; A check box that indicates (if selected) that the type of hour is treated as overtime. */
    #[Property]
    public ?bool $isOvertime;

    /** Invoicable &gt; A check box that indicates (if selected) that the type is treated as invoiceable by default. */
    #[Property]
    public ?bool $isBillable;

    /** Active &gt; A check box that indicates (if selected) that the type of hour is active and can be used. */
    #[Property]
    public ?bool $isActive;

    /** Multiplier &gt; The value by which the employee cost for this type of hour is multiplied when the time activity is released. */
    #[Property]
    public ?float $overtimeMultiplier;

    /** System generated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;
}
