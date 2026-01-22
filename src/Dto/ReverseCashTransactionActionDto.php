<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ReverseCashTransactionActionDto extends Model
{
    #[Property]
    public ?bool $returnCashTransaction;
}
