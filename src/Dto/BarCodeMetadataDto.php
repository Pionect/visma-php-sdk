<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class BarCodeMetadataDto extends Model
{
    #[Property]
    public ?int $totalCount;
}
