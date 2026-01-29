<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

class InventoryCrossReferenceUpdateDto extends Model
{
    #[Property]
    public ?alternateTypeInInventoryCrossReferenceUpdateDto $alternateType;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $bAccount;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $alternateId;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $uom;
}
