<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class FinanceChargesUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfString $entryType;

    #[Property]
    public ?\DtoValueOfString $offsetAccount;

    #[Property]
    public ?\DtoValueOfString $offsetSubAccount;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfDecimal $amount;

    #[Property]
    public ?\DtoValueOfInt32 $lineNbr;
}
