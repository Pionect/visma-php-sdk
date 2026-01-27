<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Carrier in CarrierController. Used for getting data.
 */
class CarrierDto extends Model
{
    /** Mandatory field: The top part &gt; Ship via* &gt; The unique code associated with the non-integrated carrier, the method of the integrated carrier, or the shipping option of your company. */
    #[Property]
    public ?string $carrierId;

    /** Mandatory field: The top part &gt; Description* &gt; A description of this shipping service or option. */
    #[Property]
    public ?string $carrierDescription;

    /** This information is not visible in the window.  It is collected from the system. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;
}
