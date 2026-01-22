<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CashTransactionDetailUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $lineNumber;

    #[Property]
    public ?\DtoValueOfString $branchNumber;

    #[Property]
    public ?\DtoValueOfString $inventoryNumber;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $quantity;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $price;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $amount;

    #[Property]
    public ?\DtoValueOfString $offsetAccount;

    #[Property]
    public ?array $offsetSubaccount;

    #[Property]
    public ?\DtoValueOfString $vatCode;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $notInvoiceable;

    #[Property]
    public ?\DtoValueOfString $project;

    #[Property]
    public ?\DtoValueOfString $projectTask;
}
