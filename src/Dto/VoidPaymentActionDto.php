<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class VoidPaymentActionDto extends Model
{
    #[Property]
    public ?bool $returnVoidPayment;
}
