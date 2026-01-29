<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Top part &gt; Contact &gt; The contact associated with the customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContactInCustomerDebitNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContactInCustomerDebitNoteDtoFactory factory()
 */
class ContactInCustomerDebitNoteDto extends Model
{
    /** Click the magnifier &gt; The identifier */
    #[Property]
    public ?int $id;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
