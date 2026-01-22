<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SegmentUpdateDto extends Model
{
    #[Property]
    public ?int $segmentId;

    #[Property]
    public ?string $segmentValue;
}
