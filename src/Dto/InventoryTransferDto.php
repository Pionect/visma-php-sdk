<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryTransferDtoFactory testFactory()
 */
class InventoryTransferDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?WarehouseInInventoryTransferDto $warehouse = null,
        public ?ToWarehouseInInventoryTransferDto $toWarehouse = null,
        /** @var InventoryTransferLineDto[]|null */
        public ?array $transferLines = null,
        public ?string $referenceNumber = null,
        public ?string $status = null,
        public ?bool $hold = null,
        public ?\Carbon\Carbon $date = null,
        public ?string $postPeriod = null,
        public ?string $externalReference = null,
        public ?string $description = null,
        public int|float|null $totalQuantity = null,
        public int|float|null $controlQuantity = null,
        public ?string $batchNumber = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?BranchNumberInInventoryTransferDto $branchNumber = null,
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        public ?string $timestamp = null,
        public ?string $errorInfo = null,
    ) {}
}
