<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class MultilanguageDto extends Model
{
    #[Property]
    public ?string $languageIso;

    #[Property]
    public ?string $translation;

    #[Property]
    public ?bool $isTranslated;
}
