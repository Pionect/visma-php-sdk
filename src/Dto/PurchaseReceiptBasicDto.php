<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Purchase Receipt in PurchaseReceiptController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptBasicDtoFactory factory()
 */
class PurchaseReceiptBasicDto extends Model
{
    /** The top part &gt; Tstamp &gt; The timestamp of the purchase receipt. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    /** The top part &gt; Type &gt; The type of the document, which can be one of the following options: Receipt, Return, Transfer receipt. */
    #[Property]
    public ?string $receiptType;

    /** The top part &gt; Receipt no. &gt; The unique reference number of the purchase receipt. */
    #[Property]
    public ?string $receiptNbr;

    /** The top part &gt; Hold &gt; A check box that indicates (if selected) that the document has the On hold status. */
    #[Property]
    public ?bool $hold;

    /** The top part &gt; Status &gt; The current status of the purchase or transfer receipt, or return, which the system assigns automatically. On hold, Balanced, Released. */
    #[Property]
    public ?string $status;

    /** Mandatory field: The top part &gt; Date* &gt; The date when the receipt document was created. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    /** Mandatory field: The top part &gt; Post period* &gt; The financial period to which the transactions recorded in the document should be posted. Format MMYYYY. */
    #[Property]
    public ?string $postPeriod;

    #[Property]
    public ?warehouseInPurchaseReceiptBasicDto $warehouse;

    #[Property]
    public ?supplierInPurchaseReceiptBasicDto $supplier;

    #[Property]
    public ?locationInPurchaseReceiptBasicDto $location;

    /** The top part &gt; Currency &gt; The currency the supplier uses for invoicing. */
    #[Property]
    public ?string $currency;

    #[Property]
    public ?float $exchangeRate;

    /** The top part &gt; Create invoice &gt; A check box that you select if the system must create an appropriate invoice (or adjustment) automatically when the purchase receipt is released. */
    #[Property]
    public ?bool $createBill;

    /** The top part &gt; Supplier ref. &gt; The reference number of the supplier document this receipt or return is based on. */
    #[Property]
    public ?string $supplierRef;

    /** The top part &gt; Total qty. &gt; The total quantity of items received from or returned to the supplier. */
    #[Property]
    public ?float $totalQty;

    /** The top part &gt; Control qty. &gt; The total quantity of goods on the receipt or return */
    #[Property]
    public ?float $controlQty;

    /** The top part &gt; VAT exempt total &gt; The document total that is exempt from VAT. */
    #[Property]
    public ?float $vatExemptTotal;

    /** The top part &gt; VAT taxable total &gt; The document total that is subjected to VAT. */
    #[Property]
    public ?float $vatTaxableTotal;

    /** The top part &gt; Total amt. &gt; The total amount calculated for items received from or returned to the supplier. */
    #[Property]
    public ?float $totalAmt;

    /** The top part &gt; Control amt. &gt; The total amount of the receipt or return, which you manually enter. */
    #[Property]
    public ?float $controlTotal;

    /** System generated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?branchNumberInPurchaseReceiptBasicDto $branchNumber;

    /** Document details tab &gt; Line no &gt; The number of the purchase receipt line on the document. */
    #[Property]
    public ?array $lines;

    /** This value indicates the date the document is due */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dueDate;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr1;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr2;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr3;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr4;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr5;

    /** A free custom colum of type decimal with max 4 decimals. */
    #[Property]
    public ?float $customDec1;

    /** A free custom colum of type decimal with max 4 decimals. */
    #[Property]
    public ?float $customDec2;

    /** A free custom colum of type int */
    #[Property]
    public ?int $customInt1;

    /** A free custom colum of type int */
    #[Property]
    public ?int $customInt2;

    /** A free custom colum of type DateTime - in UTC timezone */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $customDateTimeUtc1;

    #[Property]
    public ?string $errorInfo;
}
