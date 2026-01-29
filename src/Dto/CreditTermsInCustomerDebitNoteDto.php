<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The Top part &gt; Terms* &gt; The credit terms used in relations with the customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditTermsInCustomerDebitNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermsInCustomerDebitNoteDtoFactory factory()
 */
class CreditTermsInCustomerDebitNoteDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
