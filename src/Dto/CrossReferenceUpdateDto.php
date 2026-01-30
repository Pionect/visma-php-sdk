<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CrossReferenceUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CrossReferenceUpdateDtoFactory factory()
 */
class CrossReferenceUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?alternateTypeInCrossReferenceUpdateDto $alternateType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $bAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $alternateId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uom;
}
