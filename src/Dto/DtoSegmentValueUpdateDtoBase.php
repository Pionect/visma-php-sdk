<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DtoSegmentValueUpdateDtoBaseFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DtoSegmentValueUpdateDtoBaseFactory factory()
 */
class DtoSegmentValueUpdateDtoBase extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?string $value;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?bool $active;
}
