<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class AccountNumberDescriptionDto extends Model
{
    /** ExternalCode1 is deprecated, please use ExternalCode1Info instead. */
    #[Property]
    public ?string $externalCode1;

    /** ExternalCode2 is deprecated, please use ExternalCode2Info instead. */
    #[Property]
    public ?string $externalCode2;

    #[Property]
    public ?\ExternalCodeNumberDescriptionDto $externalCode1info;

    #[Property]
    public ?\ExternalCodeNumberDescriptionDto $externalCode2info;

    #[Property]
    public ?string $glConsolAccountCd;

    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
