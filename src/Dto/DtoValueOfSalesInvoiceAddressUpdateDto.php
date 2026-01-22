<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfSalesInvoiceAddressUpdateDto extends Model
{
    #[Property]
    public ?\SalesInvoiceAddressUpdateDto $value;
}
