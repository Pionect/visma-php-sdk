<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class MetadataDto extends Model
{
    #[Property]
    public ?int $totalCount;

    #[Property]
    public ?int $maxPageSize;
}
