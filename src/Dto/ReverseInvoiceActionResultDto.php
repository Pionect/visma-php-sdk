<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ReverseInvoiceActionResultDto extends Model
{
    #[Property]
    public ?string $referenceNumber;

    #[Property]
    public ?\CreditNoteDto $creditNoteDto;

    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
