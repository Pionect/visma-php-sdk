<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ActiveMultilanguageDto extends Model
{
    #[Property]
    public ?bool $isDefault;

    #[Property]
    public ?string $languageIso;

    #[Property]
    public ?string $nativeName;

    #[Property]
    public ?bool $isActive;
}
