<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DtoSegmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DtoSegmentUpdateDtoFactory factory()
 */
class DtoSegmentUpdateDto extends Model
{
    #[Property]
    public ?array $segmentValues;

    #[Property]
    public ?string $dimensionId;

    #[Property]
    public ?int $segementId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;
}
