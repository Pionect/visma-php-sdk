<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class LotSerialClassDetailDto extends Model
{
    /** Segment number for the Lot Serial segment */
    #[Property]
    public ?int $segmentNumber;

    /** Segment value for the Lot Serial segment */
    #[Property]
    public ?string $value;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
