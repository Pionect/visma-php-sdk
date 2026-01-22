<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ProjectTransactionLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt64 $tranId;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $date;

    #[Property]
    public ?\DtoValueOfString $inventoryId;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $quantity;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $billableQuantity;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $unitRate;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $amount;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $billable;

    #[Property]
    public ?\DtoValueOfString $financialPeriod;

    #[Property]
    public ?\DtoValueOfString $batchNbr;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $useBillableQty;

    #[Property]
    public ?\DtoValueOfString $project;

    #[Property]
    public ?\DtoValueOfString $projectTask;

    #[Property]
    public ?\DtoValueOfString $debitAccount;

    #[Property]
    public ?\DtoValueOfString $debitSubaccount;

    #[Property]
    public ?\DtoValueOfString $creditAccount;

    #[Property]
    public ?\DtoValueOfString $creditSubaccount;

    #[Property]
    public ?\DtoValueOfString $branch;

    #[Property]
    public ?\DtoValueOfString $employee;

    #[Property]
    public ?\DtoValueOfString $customerVendor;

    #[Property]
    public ?\DtoValueOfString $accountGroup;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $note;
}
