<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitSpecificationNonStockComponentsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationNonStockComponentsUpdateDtoFactory factory()
 */
class KitSpecificationNonStockComponentsUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $lineNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $compInventoryId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $dfltCompQty;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uom;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $allowQtyVariation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $minCompQty;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $maxCompQty;
}
