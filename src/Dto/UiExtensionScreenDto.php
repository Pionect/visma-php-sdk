<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class UiExtensionScreenDto extends Model
{
    #[Property]
    public ?string $screenId;

    #[Property]
    public ?array $stepIds;
}
