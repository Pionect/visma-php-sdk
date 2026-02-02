<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Customer &gt; The customer associated with the document.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInCustomerCreditNoteDtoFactory testFactory()
 */
class CustomerInCustomerCreditNoteDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
