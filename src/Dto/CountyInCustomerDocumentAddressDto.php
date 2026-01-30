<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * County &gt; The county or province.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CountyInCustomerDocumentAddressDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CountyInCustomerDocumentAddressDtoFactory factory()
 */
class CountyInCustomerDocumentAddressDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
