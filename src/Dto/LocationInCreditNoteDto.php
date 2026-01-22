<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Location &gt; The location of the customer related to the document. By default, it
 * is the default
 * location of the selected customer or, if the invoice is created from an
 * opportunity,
 * it is the customer location specified for the opportunity.
 */
class LocationInCreditNoteDto extends Model
{
    /** Location*. */
    #[Property]
    public ?string $countryId;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
