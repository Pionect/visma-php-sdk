<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\PaymentTypeEnum;
use Pionect\VismaSdk\Enums\ReleaseCashTransactionActionResultActionResultEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VoidPaymentActionResultDtoFactory testFactory()
 */
class VoidPaymentActionResultDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\VoidPaymentActionResultDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?PaymentTypeEnum $type = null,
        public ?string $refNbr = null,
        public ?PaymentDto $voidPayment = null,
        public ?string $actionId = null,
        public ?ReleaseCashTransactionActionResultActionResultEnum $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
