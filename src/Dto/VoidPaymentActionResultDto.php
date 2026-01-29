<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VoidPaymentActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VoidPaymentActionResultDtoFactory factory()
 */
class VoidPaymentActionResultDto extends Model
{
    #[Property]
    public ?string $type;

    #[Property]
    public ?string $refNbr;

    #[Property]
    public ?PaymentDto $voidPayment;

    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
