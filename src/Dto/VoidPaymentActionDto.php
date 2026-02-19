<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\PaymentTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VoidPaymentActionDtoFactory testFactory()
 */
class VoidPaymentActionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?PaymentTypeEnum $type = null,
        public ?bool $returnVoidPayment = null,
    ) {}
}
