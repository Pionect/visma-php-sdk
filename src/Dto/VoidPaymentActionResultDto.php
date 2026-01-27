<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class VoidPaymentActionResultDto extends Model
{
    #[Property]
    public ?string $type;

    #[Property]
    public ?string $refNbr;

    #[Property]
    public ?\PaymentDto $voidPayment;

    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
