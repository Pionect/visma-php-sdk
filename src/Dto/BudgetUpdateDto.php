<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class BudgetUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $ledger;

    #[Property]
    public ?\DtoValueOfString $financialYear;

    #[Property]
    public ?\DtoValueOfString $account;

    #[Property]
    public ?array $subaccount;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfDecimal $amount;

    #[Property]
    public ?\DtoValueOfString $branchNumber;

    #[Property]
    public ?array $periods;
}
