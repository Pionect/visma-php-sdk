<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CorrectSupplierInvoiceActionResultDto extends Model
{
    #[Property]
    public ?string $refNbr;

    #[Property]
    public ?string $errorMessage;

    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
