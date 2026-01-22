<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class LanguageUpdateDto extends Model
{
    #[Property]
    public ?string $languageIso;
}
