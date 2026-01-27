<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PurchaseReceiptsDto extends Model
{
    /** The top part &gt; Type &gt; The type of the document, which can be Receipt, Return, or Transfer receipt. */
    #[Property]
    public ?string $type;

    /** The top part &gt; Receipt no. &gt; The unique reference number of the purchase receipt, transfer receipt, or return, which the system automatically assigns according to its number series. */
    #[Property]
    public ?string $receiptNumber;

    /** The top part &gt; Status &gt; The current status of the purchase or transfer receipt, or return, which the system assigns automatically. */
    #[Property]
    public ?string $status;

    /** The top part &gt; Supplier &gt; The supplier from which the items have been received or to which they will be returned. */
    #[Property]
    public ?string $supplierName;

    /** The top part &gt; Currency &gt; The currency the supplier uses for invoicing. */
    #[Property]
    public ?string $currency;

    /** The top part &gt; Total qty. &gt; The total quantity of items received from or returned to the supplier; the sum of all quantities of all stock items listed on the Document details tab. */
    #[Property]
    public ?float $totalQty;

    /** The top part &gt; Total amt. &gt; The total amount calculated for items received from or returned to the supplier; the sum of all amounts of all stock items listed on the Document details tab. */
    #[Property]
    public ?float $totalAmt;
}
