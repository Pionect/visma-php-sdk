<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitAssemblyUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitAssemblyUpdateDtoFactory factory()
 */
class KitAssemblyUpdateDto extends Model
{
    /** Type, possible values: P - Production, D - Disassembly */
    #[Property]
    public ?string $type;

    #[Property]
    public ?string $refNo;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $hold;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $date;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $postPeriod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $itemId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $revision;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $reasonCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $warehouse;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $location;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uoM;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $quantity;

    #[Property]
    public ?array $stockComponentLines;

    /**
     * This property is deprecated and will be removed in a future version.
     * Use StockComponentLineAllocations within each StockComponentLine instead.
     */
    #[Property]
    public ?array $stockComponentAllocations;

    #[Property]
    public ?array $nonStockComponentLines;

    #[Property]
    public ?array $kitAllocations;
}
