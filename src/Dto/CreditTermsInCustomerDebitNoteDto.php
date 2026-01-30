<?php

namespace Pionect\VismaSdk\Dto;

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
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
