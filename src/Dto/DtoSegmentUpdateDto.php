<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoSegmentUpdateDto extends Model
{
    #[Property]
    public ?array $segmentValues;

    #[Property]
    public ?string $dimensionId;

    #[Property]
    public ?int $segementId;

    #[Property]
    public ?\DtoValueOfString $description;
}
