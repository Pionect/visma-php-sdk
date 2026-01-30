<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VoidPaymentActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VoidPaymentActionResultDtoFactory testFactory()
 */
class VoidPaymentActionResultDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $refNbr = null,
        public ?PaymentDto $voidPayment = null,
        public ?string $actionId = null,
        public ?string $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
