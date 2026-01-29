<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT category &gt; The VAT category (if applied) for the transaction. The category represents the
 * type of goods or services.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCodeInCustomerInvoiceLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCodeInCustomerInvoiceLineDtoFactory factory()
 */
class VatCodeInCustomerInvoiceLineDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
