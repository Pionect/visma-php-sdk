<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryIssueLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryIssueLineUpdateDtoFactory factory()
 */
class InventoryIssueLineUpdateDto extends Model
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
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $unitPrice;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $extPrice;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $tranType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $lotSerialNumber;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?array $allocations;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $costCode;

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
