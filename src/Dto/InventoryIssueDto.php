<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryIssueDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryIssueDtoFactory factory()
 */
class InventoryIssueDto extends Model
{
    public function __construct(
        public int|float|null $totalAmount = null,
        public int|float|null $controlAmount = null,
        public ?array $issueLines = null,
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
        public ?BranchNumberInInventoryIssueDto $branchNumber = null,
        public ?array $attachments = null,
        public ?string $timestamp = null,
        public ?string $errorInfo = null,
    ) {}
}
