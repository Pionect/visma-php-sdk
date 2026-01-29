<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Default location settings section &gt; Location name &gt; A description
 * of the customer location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInCustomerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInCustomerDtoFactory factory()
 */
class LocationInCustomerDto extends Model
{
    /** Location*. */
    #[Property]
    public ?string $countryId;

    /** Click the magnifier &gt; The identifier */
    #[Property]
    public ?string $id;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
