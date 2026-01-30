<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Top part &gt; Location* &gt; The supplier location associated with the purchase.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInSupplierDocumentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInSupplierDocumentDtoFactory factory()
 */
class LocationInSupplierDocumentDto extends Model
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
