<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class BarCodeDto extends Model
{
    #[Property]
    public ?string $barCode;

    #[Property]
    public ?string $inventoryNumber;

    #[Property]
    public ?\BarCodeMetadataDto $metadata;
}
