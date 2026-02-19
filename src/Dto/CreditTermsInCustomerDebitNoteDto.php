<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The Top part &gt; Terms* &gt; The credit terms used in relations with the customer.
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermsInCustomerDebitNoteDtoFactory testFactory()
 */
class CreditTermsInCustomerDebitNoteDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
