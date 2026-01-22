<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class AccountUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $accountCd;

    #[Property]
    public ?\DtoValueOfBoolean $active;

    #[Property]
    public ?\DtoValueOfString $accountClass;

    #[Property]
    public ?\DtoValueOfString $analysisCode;

    #[Property]
    public ?\DtoValueOfString $currency;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $extenalCode1;

    #[Property]
    public ?\DtoValueOfString $externalCode2;

    #[Property]
    public ?\DtoValueOfString $accountGroupCd;

    #[Property]
    public ?\DtoValueOfString $postOption;

    #[Property]
    public ?\DtoValueOfString $publicCode1;

    #[Property]
    public ?\DtoValueOfBoolean $useDefaultSub;

    #[Property]
    public ?\DtoValueOfString $taxCategory;
}
