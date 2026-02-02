<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Top part &gt; Contact &gt; The contact associated with the customer.
 *
 * @method static \Pionect\VismaSdk\Factories\ContactInCustomerDebitNoteDtoFactory testFactory()
 */
class ContactInCustomerDebitNoteDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
