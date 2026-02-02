<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Location &gt; The location of the customer or supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInProjectTransactionLineDtoFactory testFactory()
 */
class LocationInProjectTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
