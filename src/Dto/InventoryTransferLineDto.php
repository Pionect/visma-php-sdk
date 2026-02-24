<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryTransferLineDtoFactory testFactory()
 */
class InventoryTransferLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\InventoryTransferLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?LocationDescriptionDto $toLocation = null,
        public ?string $lotSerialNumber = null,
        public ?\Carbon\Carbon $expirationDate = null,
        /** @var AllocationsBasicDto[]|null */
        public ?array $allocations = null,
        public ?int $lineNumber = null,
        public ?InventoryItemInInventoryTransferLineDto $inventoryItem = null,
        public ?LocationInInventoryTransferLineDto $location = null,
        /**
         * Quantity > The quantity of the transferred goods (in the units indicated
         * below).
         */
        public int|float|null $quantity = null,
        /**
         * Mandatory field: UoM* > The unit of measure (UoM) used for the goods to be
         * transferred.
         */
        public ?string $uom = null,
        public ?ReasonCodeInInventoryTransferLineDto $reasonCode = null,
        /** Description > A brief description of the goods transfer transaction. */
        public ?string $description = null,
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        public ?BranchNumberDto $branchNumber = null,
    ) {}
}
