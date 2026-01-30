<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReverseCashTransactionActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReverseCashTransactionActionDtoFactory testFactory()
 */
class ReverseCashTransactionActionDto extends Model
{
    public function __construct(
        public ?bool $returnCashTransaction = null,
    ) {}
}
