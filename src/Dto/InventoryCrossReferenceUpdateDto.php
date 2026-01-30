<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryCrossReferenceUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryCrossReferenceUpdateDtoFactory factory()
 */
class InventoryCrossReferenceUpdateDto extends Model
{
    #[Property]
    public ?alternateTypeInInventoryCrossReferenceUpdateDto $alternateType;

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
