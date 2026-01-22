<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ReverseInvoiceActionDto extends Model
{
    #[Property]
    public ?bool $returnCreditNote;
}
