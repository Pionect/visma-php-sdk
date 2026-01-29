<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryTransferLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryTransferLineDtoFactory factory()
 */
class InventoryTransferLineDto extends Model
{
    #[Property]
    public ?LocationDescriptionDto $toLocation;

    #[Property]
    public ?string $lotSerialNumber;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?array $allocations;

    #[Property]
    public ?int $lineNumber;

    #[Property]
    public ?inventoryItemInInventoryTransferLineDto $inventoryItem;

    #[Property]
    public ?locationInInventoryTransferLineDto $location;

    /** Quantity &gt; The quantity of the transferred goods (in the units indicated below). */
    #[Property]
    public ?float $quantity;

    /** Mandatory field: UoM* &gt; The unit of measure (UoM) used for the goods to be transferred. */
    #[Property]
    public ?string $uom;

    #[Property]
    public ?reasonCodeInInventoryTransferLineDto $reasonCode;

    /** Description &gt; A brief description of the goods transfer transaction. */
    #[Property]
    public ?string $description;

    #[Property]
    public ?array $attachments;

    #[Property]
    public ?BranchNumberDto $branchNumber;
}
