<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location &gt; The location of the customer or supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInProjectTransactionLineDtoFactory factory()
 */
class LocationInProjectTransactionLineDto extends Model
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
