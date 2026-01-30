<?php

namespace Pionect\VismaSdk\Dto;

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
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
