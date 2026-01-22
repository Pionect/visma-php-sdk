<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class MultilanguageTranslationDto extends Model
{
    #[Property]
    public ?string $translation;
}
