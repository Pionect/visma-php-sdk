<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceLineDtoFactory testFactory()
 */
class SupplierInvoiceLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierInvoiceLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number at the left indicating the line number of the table. */
        public ?int $lineNumber = null,
        /**
         * Item ID > The unique ID of the particular item or service delivered by the
         * supplier.
         */
        public ?string $inventoryNumber = null,
        /** External inventory id > External inventory number */
        public ?string $externalInventoryId = null,
        /** Background information indicating whether the item is a stock item or not. */
        public ?bool $stockItem = null,
        /**
         * Transaction descr. > Any description relevant to the transaction. An
         * alphanumeric string of up to 30 characters may be used.
         */
        public ?string $transactionDescription = null,
        /**
         * Quantity > The quantity of the item or service to be delivered by the
         * supplier.
         */
        public int|float|null $quantity = null,
        /** UoM > The unit of measure for the item. */
        public ?string $uom = null,
        /** Unit cost > The unit cost of the item. */
        public int|float|null $unitCost = null,
        /**
         * Background calculation giving you the Unit cost in the selected currency.This
         * field is applicable if the amount is given in a another currency than your
         * default.
         */
        public int|float|null $unitCostInCurrency = null,
        /** Cost > The unit cost of the item or service received from the supplier. */
        public int|float|null $cost = null,
        /**
         * Background calculation giving you the Cost in the selected currency.This
         * field is applicable if the amount is given in a another currency than your
         * default.
         */
        public int|float|null $costInCurrency = null,
        /**
         * Discount percent > The percent of the line-level discount that has been
         * applied manually or automatically.
         */
        public int|float|null $discountPercent = null,
        /**
         * Discount amount > The amount of the line-level discount that has been applied
         * manually or automatically to this line.
         */
        public int|float|null $discountAmount = null,
        /**
         * Background calculation giving you the Discount amount in the selected
         * currency.This field is applicable if the amount is given in a another
         * currency than your default.
         */
        public int|float|null $discountAmountInCurrency = null,
        /**
         * Background calculation giving you the Discount unit cost in the default
         * currency.
         */
        public int|float|null $discountUnitCost = null,
        /**
         * Background calculation giving you the Discount unit cost in the selected
         * currency.This field is applicable if the amount is given in a another
         * currency than your default.
         */
        public int|float|null $discountUnitCostInCurrency = null,
        /**
         * Manual discount > A check box that indicates (if selected) that the discount
         * has been applied manually.
         */
        public ?bool $manualDiscount = null,
        public ?AccountInSupplierInvoiceLineDto $account = null,
        public ?SubaccountInSupplierInvoiceLineDto $subaccount = null,
        public ?PrebookAccountInSupplierInvoiceLineDto $prebookAccount = null,
        public ?PrebookSubaccountInSupplierInvoiceLineDto $prebookSubaccount = null,
        /**
         * Original deferral schedule > A read-only column filled in by the system in
         * the Debit adjustment documents created by the reversing process.It shows the
         * ID of the deferral schedule associated with the original document (such as a
         * purchase invoice).
         */
        public ?int $deferralSchedule = null,
        /** The public CD/Code of the deferral schedule visible to user */
        public ?string $deferralScheduleNbr = null,
        /**
         * Deferral code > The deferral code assigned to the stock item or non-stock
         * item specified in this document line.
         */
        public ?string $deferralCode = null,
        public ?VatCodeInSupplierInvoiceLineDto $vatCode = null,
        /**
         * Purchase order number > The number of the purchase order linked to this line
         * of the invoice.
         */
        public ?string $poNumber = null,
        /**
         * Purchase order line > The line number of the purchase order line linked to
         * this line of the invoice.
         */
        public ?int $poLineNr = null,
        /**
         * Purchase order receipt no. > The number of the purchase receipt linked to
         * this line of the invoice.
         */
        public ?string $poReceiptNbr = null,
        /**
         * Purchase order receipt line > The line number of the purchase receipt's line
         * that is linked to this line of the invoice.
         */
        public ?int $poReceiptLineNbr = null,
        public ?BranchNumberInSupplierInvoiceLineDto $branchNumber = null,
        /**
         * Icon Notes > Pop-up window for providing any user-defined text connected with
         * to invoice.
         */
        public ?string $note = null,
        /** Split hierarchy > The number of the original row that has been split. */
        public ?string $splitHierarchy = null,
        public ?ProjectInSupplierInvoiceLineDto $project = null,
        public ?ProjectTaskInSupplierInvoiceLineDto $projectTask = null,
        /**
         * @var AttachmentDto[]|null
         *                           The data containing information about the document attachments
         */
        public ?array $attachments = null,
        public int|float|null $retainagePct = null,
        public int|float|null $curyRetainageAmt = null,
        public ?\Carbon\Carbon $termStartDate = null,
        public ?\Carbon\Carbon $termEndDate = null,
    ) {}
}
