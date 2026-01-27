<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

class DtoSegmentUpdateDto extends Model
{
    #[Property]
    public ?array $segmentValues;

    #[Property]
    public ?string $dimensionId;

    #[Property]
    public ?int $segementId;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $description;
}
