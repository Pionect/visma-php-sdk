<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Set this value to true if you need to create a new invoice and use supplied referenceNumber
 * (Invoicenumber)
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OverrideNumberSeriesInCustomerInvoiceUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OverrideNumberSeriesInCustomerInvoiceUpdateDtoFactory factory()
 */
class OverrideNumberSeriesInCustomerInvoiceUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
