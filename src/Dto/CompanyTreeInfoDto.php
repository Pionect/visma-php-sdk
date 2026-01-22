<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CompanyTreeInfoDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfBoolean $active;

    #[Property]
    public ?\DtoValueOfBoolean $owner;

    #[Property]
    public ?\DtoValueOfString $workGroupId;
}
