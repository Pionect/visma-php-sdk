<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PrepareInvoiceActionResultDto extends Model
{
    #[Property]
    public ?string $referenceNumber;

    #[Property]
    public ?\CustomerInvoiceDto $customerInvoiceDto;

    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
