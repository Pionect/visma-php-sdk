<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class JournalTransactionLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $lineNumber;

    #[Property]
    public ?\DtoValueOfString $accountNumber;

    #[Property]
    public ?array $subaccount;

    #[Property]
    public ?\DtoValueOfString $project;

    #[Property]
    public ?\DtoValueOfString $projectTask;

    #[Property]
    public ?\DtoValueOfString $referenceNumber;

    #[Property]
    public ?\DtoValueOfString $transactionDescription;

    #[Property]
    public ?\DtoValueOfDecimal $debitAmountInCurrency;

    #[Property]
    public ?\DtoValueOfDecimal $creditAmountInCurrency;

    #[Property]
    public ?\DtoValueOfString $vatCodeId;

    #[Property]
    public ?\DtoValueOfString $vatId;

    #[Property]
    public ?\DtoValueOfString $branch;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    public ?\DtoValueOfDecimal $quantity;

    #[Property]
    public ?\DtoValueOfString $note;
}
