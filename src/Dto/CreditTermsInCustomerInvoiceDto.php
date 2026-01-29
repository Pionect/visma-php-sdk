<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Terms* &gt; The credit terms used in relations with the customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditTermsInCustomerInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermsInCustomerInvoiceDtoFactory factory()
 */
class CreditTermsInCustomerInvoiceDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
