<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The document details tab &gt; Salesperson ID &gt; The salesperson involved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonInCustomerInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInCustomerInvoiceDtoFactory factory()
 */
class SalesPersonInCustomerInvoiceDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
