<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The project that the employee worked on.
 */
class ProjectInTimeCardMaterialsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
