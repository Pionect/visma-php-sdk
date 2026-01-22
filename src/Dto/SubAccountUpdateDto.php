<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SubAccountUpdateDto extends Model
{
    #[Property]
    public ?\subaccountNumberInSubAccountUpdateDto $subaccountNumber;

    #[Property]
    public ?\subaccountIdInSubAccountUpdateDto $subaccountId;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfBoolean $active;
}
