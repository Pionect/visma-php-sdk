<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ChangeProjectIdActionDto extends Model
{
    #[Property]
    public ?string $projectId;
}
