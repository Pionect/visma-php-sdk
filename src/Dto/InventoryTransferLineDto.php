<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryTransferLineDtoFactory testFactory()
 */
class InventoryTransferLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?LocationDescriptionDto $toLocation = null,
        public ?string $lotSerialNumber = null,
        public ?\Carbon\Carbon $expirationDate = null,
        public ?array $allocations = null,
        public ?int $lineNumber = null,
        public ?InventoryItemInInventoryTransferLineDto $inventoryItem = null,
        public ?LocationInInventoryTransferLineDto $location = null,
        public int|float|null $quantity = null,
        public ?string $uom = null,
        public ?ReasonCodeInInventoryTransferLineDto $reasonCode = null,
        public ?string $description = null,
        public ?array $attachments = null,
        public ?BranchNumberDto $branchNumber = null,
    ) {}
}
