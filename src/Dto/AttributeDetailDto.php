<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class AttributeDetailDto extends Model
{
    #[Property]
    public ?string $valueId;

    #[Property]
    public ?string $description;

    #[Property]
    public ?int $sortOrder;

    #[Property]
    public ?bool $disabled;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
