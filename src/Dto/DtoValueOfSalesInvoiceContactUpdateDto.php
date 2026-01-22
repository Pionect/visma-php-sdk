<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfSalesInvoiceContactUpdateDto extends Model
{
    #[Property]
    public ?\SalesInvoiceContactUpdateDto $value;
}
