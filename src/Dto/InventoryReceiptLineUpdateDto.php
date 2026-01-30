<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryReceiptLineUpdateDtoFactory factory()
 */
class InventoryReceiptLineUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $warehouseId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $unitCost;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $extCost;

    #[Property]
    public ?array $allocations;

    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $lineNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $inventoryNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $locationId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $quantity;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uom;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $reasonCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectTaskId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branchNumber;
}
