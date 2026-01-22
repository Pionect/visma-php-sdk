<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class EinvoiceContractUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $fInvoiceContractId;

    #[Property]
    public ?\DtoValueOfString $fInvoiceIntermediatorId;
}
