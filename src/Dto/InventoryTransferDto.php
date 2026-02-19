<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\InventoryAdjustmentStatusEnum;
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
        /**
         * @var InventoryTransferLineDto[]|null
         *                                      The Transaction details tab > The inventory transfer lines
         */
        public ?array $transferLines = null,
        /**
         * The unique reference number of the receipt, which the system automatically
         * assigns according to the numbering sequence selected for receipts on
         * the Inventory Preferences IN.10.10.00) form.
         */
        public ?string $referenceNumber = null,
        /**
         * The current status of the receipt. The following options are available:
         * On Hold:The receipt/issue is a draft and can be edited. Receipts with this
         * status cannot be released.
         * Balanced: The receipt/issue data has been validated by the system and the
         * receipt can be released. It also can be modified or deleted, but changes can
         * be saved only if the receipt is balanced.
         * Released: The receipt/issue has been released and cannot be edited or
         * deleted.
         */
        public ?InventoryAdjustmentStatusEnum $status = null,
        /**
         * A check box that you select to give the receipt the On Hold status. Clear
         * the check box to save the receipt with the Balanced status.
         */
        public ?bool $hold = null,
        /**
         * The date when the inventory document was created. All transactions included
         * in this document will have this transaction date.
         */
        public ?\Carbon\Carbon $date = null,
        /**
         * The financial period to which the transactions recorded in the document
         * should be posted. Format MMYYYY.
         */
        public ?string $postPeriod = null,
        /**
         * The external reference number of the inventory issue document (for example,
         * the vendor’s reference code).
         */
        public ?string $externalReference = null,
        /** A brief description of the inventory issue or its transactions. */
        public ?string $description = null,
        /**
         * The total quantity of inventory items, which the system calculates
         * automatically, for the document.
         */
        public int|float|null $totalQuantity = null,
        /**
         * The manually entered quantity of inventory items. Control Qty. is available
         * only if the Validate Document Totals on Entry option is selected on
         * the Inventory Preferences form. If the Control Qty. and Total Qty.values
         * do not match, the system generates a warning message and the issue cannot be
         * saved.
         */
        public int|float|null $controlQuantity = null,
        /**
         * The reference number of the batch generated for the receipt. Click the number
         * to open the Journal Transactions (GL.30.10.00) form and view the details of
         * the transactions.
         */
        public ?string $batchNumber = null,
        /** The date when the document was last modified. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?BranchNumberInInventoryTransferDto $branchNumber = null,
        /**
         * @var AttachmentDto[]|null
         *                           The data containing information about the document attachments
         */
        public ?array $attachments = null,
        /** Timestamp of the inventory document */
        public ?string $timestamp = null,
        public ?string $errorInfo = null,
    ) {}
}
