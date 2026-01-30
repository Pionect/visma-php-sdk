<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Location &gt; The location of the customer related to the document. By default, it
 * is the default
 * location of the selected customer or, if the invoice is created from an
 * opportunity,
 * it is the customer location specified for the opportunity.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInCustomerCreditWriteOffDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInCustomerCreditWriteOffDtoFactory testFactory()
 */
class LocationInCustomerCreditWriteOffDto extends Model
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
