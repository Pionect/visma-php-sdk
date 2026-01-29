<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReverseCashTransactionActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReverseCashTransactionActionDtoFactory factory()
 */
class ReverseCashTransactionActionDto extends Model
{
    #[Property]
    public ?bool $returnCashTransaction;
}
