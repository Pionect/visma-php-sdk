<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SendToAutoInvoiceArDocumentActionResultDto extends Model
{
    #[Property]
    public ?string $refNbr;

    #[Property]
    public ?string $documentType;

    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
