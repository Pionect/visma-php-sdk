<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ReleaseCashTransactionActionResultActionResultEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ReverseCashTransactionActionResultDtoFactory testFactory()
 */
class ReverseCashTransactionActionResultDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $referenceNbr = null,
        public ?CashTransactionDto $cashTransaction = null,
        public ?string $actionId = null,
        public ?ReleaseCashTransactionActionResultActionResultEnum $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
