<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\PurchaseReceiptsStatusEnum;
use Pionect\VismaSdk\Enums\PurchaseReceiptsTypeEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Purchase Receipt in PurchaseReceiptController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptDtoFactory testFactory()
 */
class PurchaseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * @var LandedCostDto[]|null
         *                           Landed costs tab > Landed cost code > The landed cost code specified in the
         *                           line of the landed cost document.
         */
        public ?array $landedCost = null,
        public ?string $note = null,
        /** The top part > Tstamp > The timestamp of the purchase receipt. */
        public ?string $timeStamp = null,
        /**
         * The top part > Type > The type of the document, which can be one of the
         * following options: Receipt, Return, Transfer receipt.
         */
        public ?PurchaseReceiptsTypeEnum $receiptType = null,
        /**
         * The top part > Receipt no. > The unique reference number of the purchase
         * receipt.
         */
        public ?string $receiptNbr = null,
        /**
         * The top part > Hold > A check box that indicates (if selected) that the
         * document has the On hold status.
         */
        public ?bool $hold = null,
        /**
         * The top part > Status > The current status of the purchase or transfer
         * receipt, or return, which the system assigns automatically. On hold,
         * Balanced, Released.
         */
        public ?PurchaseReceiptsStatusEnum $status = null,
        /**
         * Mandatory field: The top part > Date* > The date when the receipt document
         * was created.
         */
        public ?\Carbon\Carbon $date = null,
        /**
         * Mandatory field: The top part > Post period* > The financial period to which
         * the transactions recorded in the document should be posted. Format MMYYYY.
         */
        public ?string $postPeriod = null,
        public ?WarehouseInPurchaseReceiptDto $warehouse = null,
        public ?SupplierInPurchaseReceiptDto $supplier = null,
        public ?LocationInPurchaseReceiptDto $location = null,
        /** The top part > Currency > The currency the supplier uses for invoicing. */
        public ?string $currency = null,
        public int|float|null $exchangeRate = null,
        /**
         * The top part > Create invoice > A check box that you select if the system
         * must create an appropriate invoice (or adjustment) automatically when the
         * purchase receipt is released.
         */
        public ?bool $createBill = null,
        /**
         * The top part > Supplier ref. > The reference number of the supplier document
         * this receipt or return is based on.
         */
        public ?string $supplierRef = null,
        /**
         * The top part > Total qty. > The total quantity of items received from or
         * returned to the supplier.
         */
        public int|float|null $totalQty = null,
        /**
         * The top part > Control qty. > The total quantity of goods on the receipt or
         * return
         */
        public int|float|null $controlQty = null,
        /** The top part > VAT exempt total > The document total that is exempt from VAT. */
        public int|float|null $vatExemptTotal = null,
        /**
         * The top part > VAT taxable total > The document total that is subjected to
         * VAT.
         */
        public int|float|null $vatTaxableTotal = null,
        /**
         * The top part > Total amt. > The total amount calculated for items received
         * from or returned to the supplier.
         */
        public int|float|null $totalAmt = null,
        /**
         * The top part > Control amt. > The total amount of the receipt or return,
         * which you manually enter.
         */
        public int|float|null $controlTotal = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?BranchNumberInPurchaseReceiptDto $branchNumber = null,
        /**
         * @var PurchaseReceiptLineDto[]|null
         *                                    Document details tab > Line no > The number of the purchase receipt line on
         *                                    the document.
         */
        public ?array $lines = null,
        /** This value indicates the date the document is due */
        public ?\Carbon\Carbon $dueDate = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr1 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr2 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr3 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr4 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr5 = null,
        /** A free custom colum of type decimal with max 4 decimals. */
        public int|float|null $customDec1 = null,
        /** A free custom colum of type decimal with max 4 decimals. */
        public int|float|null $customDec2 = null,
        /** A free custom colum of type int */
        public ?int $customInt1 = null,
        /** A free custom colum of type int */
        public ?int $customInt2 = null,
        /** A free custom colum of type DateTime - in UTC timezone */
        #[MapName('customDateTimeUTC1')]
        public ?\Carbon\Carbon $customDateTimeUtc1 = null,
        public ?string $errorInfo = null,
    ) {}
}
