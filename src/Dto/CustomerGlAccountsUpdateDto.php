<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerGlAccountsUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $customerLedgerAccount;

    #[Property]
    public ?array $customerLedgerSubaccount;

    #[Property]
    public ?\DtoValueOfString $salesAccount;

    #[Property]
    public ?\DtoValueOfString $salesNonTaxableAccount;

    #[Property]
    public ?\DtoValueOfString $salesEuAccount;

    #[Property]
    public ?\DtoValueOfString $salesExportAccount;

    #[Property]
    public ?array $salesSubaccount;

    #[Property]
    public ?\DtoValueOfString $discountAccount;

    #[Property]
    public ?array $discountSubaccount;

    #[Property]
    public ?\DtoValueOfString $freightAccount;

    #[Property]
    public ?array $freightSubaccount;

    #[Property]
    public ?\DtoValueOfString $cashDiscountAccount;

    #[Property]
    public ?array $cashDiscountSubaccount;

    #[Property]
    public ?\DtoValueOfString $prepaymentAccount;

    #[Property]
    public ?array $prepaymentSubaccount;
}
