<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierGlAccountsUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $supplierAccount;

    #[Property]
    public ?\DtoValueOfString $supplierSubaccount;

    #[Property]
    public ?\DtoValueOfString $expenseAccount;

    #[Property]
    public ?\DtoValueOfString $expenseAccountNonTax;

    #[Property]
    public ?\DtoValueOfString $expenseEuaccount;

    #[Property]
    public ?\DtoValueOfString $expenseAccountImport;

    #[Property]
    public ?\DtoValueOfString $expenseSubaccount;
}
