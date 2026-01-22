<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class EinvoiceContractDto extends Model
{
    #[Property]
    public ?string $fInvoiceContractId;

    #[Property]
    public ?string $fInvoiceIntermediatorId;
}
