<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Location &gt; The location of the customer related to the document. By default, it
 * is the default
 * location of the selected customer or, if the invoice is created from an
 * opportunity,
 * it is the customer location specified for the opportunity.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInCustomerCreditWriteOffDtoFactory testFactory()
 */
class LocationInCustomerCreditWriteOffDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\LocationInCustomerCreditWriteOffDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Location*. */
        public ?string $countryId = null,
        /** Click the magnifier > The identifier */
        public ?string $id = null,
        /** Click the magnifier > The displayed name */
        public ?string $name = null,
    ) {}
}
