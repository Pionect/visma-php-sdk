<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReverseCashTransactionActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReverseCashTransactionActionResultDtoFactory testFactory()
 */
class ReverseCashTransactionActionResultDto extends Model
{
    public function __construct(
        public ?string $referenceNbr = null,
        public ?CashTransactionDto $cashTransaction = null,
        public ?string $actionId = null,
        public ?string $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
