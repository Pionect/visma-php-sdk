<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitSpecificationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationUpdateDtoFactory factory()
 */
class KitSpecificationUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $kitInventoryId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $revisionId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $descr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $isActive;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $allowCompAddition;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $isNonStock;

    #[Property]
    public ?array $stockComponentLines;

    #[Property]
    public ?array $nonStockComponentLines;
}
