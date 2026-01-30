<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Top part &gt; Contact &gt; The contact associated with the customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContactInCustomerDebitNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContactInCustomerDebitNoteDtoFactory testFactory()
 */
class ContactInCustomerDebitNoteDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
