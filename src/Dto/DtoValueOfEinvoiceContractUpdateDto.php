<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfEinvoiceContractUpdateDto extends Model
{
    #[Property]
    public ?\EInvoiceContractUpdateDto $value;
}
