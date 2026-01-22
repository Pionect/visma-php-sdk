<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfPeppolSchemeUpdateDto extends Model
{
    #[Property]
    public ?\PeppolSchemeUpdateDto $value;
}
