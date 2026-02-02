<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Top part &gt; Location* &gt; The supplier location associated with the purchase.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInSupplierDocumentDtoFactory testFactory()
 */
class LocationInSupplierDocumentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
