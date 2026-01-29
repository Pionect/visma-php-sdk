<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 */
class InventoryIssueDto extends Model
{
    /** The top part &gt; Total amount &gt; The total amount, calculated as a sum of amounts for all inventory issue operations included in this issue document. */
    #[Property]
    public ?float $totalAmount;

    /** The top part &gt; Control amount &gt; The manually entered summary amount for all specified inventory items. Control Amount is available only if the Validate Document Totals on Entry option is selected on the Inventory Preferences form. If the Control Amount and Total Amount values do not match, the system generates a warning message and the issue cannot be saved. */
    #[Property]
    public ?float $controlAmount;

    /** Transaction details tab &gt; */
    #[Property]
    public ?array $issueLines;

    /** The unique reference number of the receipt, which the system automatically assigns according to the numbering sequence selected for receipts on the Inventory Preferences IN.10.10.00) form. */
    #[Property]
    public ?string $referenceNumber;

    /**
     * The current status of the receipt. The following options are available:
     * On Hold:The receipt/issue is a draft and can be edited. Receipts with this status cannot be released.
     * Balanced: The receipt/issue data has been validated by the system and the receipt can be released. It also can be modified or deleted, but changes can be saved only if the receipt is balanced.
     * Released: The receipt/issue has been released and cannot be edited or deleted.
     */
    #[Property]
    public ?string $status;

    /** A check box that you select to give the receipt the On Hold status. Clear the check box to save the receipt with the Balanced status. */
    #[Property]
    public ?bool $hold;

    /** The date when the inventory document was created. All transactions included in this document will have this transaction date. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    /** The financial period to which the transactions recorded in the document should be posted. Format MMYYYY. */
    #[Property]
    public ?string $postPeriod;

    /** The external reference number of the inventory issue document (for example, the vendor’s reference code). */
    #[Property]
    public ?string $externalReference;

    /** A brief description of the inventory issue or its transactions. */
    #[Property]
    public ?string $description;

    /** The total quantity of inventory items, which the system calculates automatically, for the document. */
    #[Property]
    public ?float $totalQuantity;

    /** The manually entered quantity of inventory items. Control Qty. is available only if the Validate Document Totals on Entry option is selected on the Inventory Preferences form. If the Control Qty. and Total Qty.values do not match, the system generates a warning message and the issue cannot be saved. */
    #[Property]
    public ?float $controlQuantity;

    /** The reference number of the batch generated for the receipt. Click the number to open the Journal Transactions (GL.30.10.00) form and view the details of the transactions. */
    #[Property]
    public ?string $batchNumber;

    /** The date when the document was last modified. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?branchNumberInInventoryIssueDto $branchNumber;

    /** The data containing information about the document attachments */
    #[Property]
    public ?array $attachments;

    /** Timestamp of the inventory document */
    #[Property]
    public ?string $timestamp;

    #[Property]
    public ?string $errorInfo;
}
