<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a SOOrder in SOOrderController. Used by getting data.
 */
class SalesOrderBasicDto extends Model
{
    #[Property]
    public ?array $lines;

    /** Mandatory field: The top part &gt; Order type &gt; The type of the document, which is one of the predefined order types or a custom order type created by using the (SO201000) window. */
    #[Property]
    public ?string $orderType;

    /** The top part &gt; Order no.: &gt; The reference number of the document. */
    #[Property]
    public ?string $orderNo;

    /** The top part &gt; Status &gt; The status of the document, which can be one of the following options: On hold, Credit hold, Pending aååroval, Rejected, Open, Cancelled, Shipping, Back order, Invoiced, Completed. */
    #[Property]
    public ?string $status;

    /** The top part &gt; Hold &gt; A check box that you select if the document is on hold and should not be processed further at this time. */
    #[Property]
    public ?bool $hold;

    /** Mandatory field: The top part &gt; Date* &gt;  The date of the document. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    /** Mandatory field: The top part &gt; Requested on &gt; The date when the customer wants to receive the goods; this date provides the default values for the Requested on dates for order lines. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $requestOn;

    /** The top part &gt; Customer order &gt; The reference number of the original customer document that the sales order is based on. */
    #[Property]
    public ?string $customerOrder;

    /** The top part &gt; External reference &gt; The reference number of the sales order in a third-party application if Visma.net Financials is integrated with such an application and imports the sales orders from it. */
    #[Property]
    public ?string $customerRefNo;

    #[Property]
    public ?customerInSalesOrderBasicDto $customer;

    /** The top part &gt; Contact &gt; The contact person of the customer. */
    #[Property]
    public ?int $contactId;

    #[Property]
    public ?locationInSalesOrderBasicDto $location;

    /** The top part &gt; Currency &gt; The currency of the document. */
    #[Property]
    public ?string $currency;

    /** The top part &gt; Description &gt; A brief description of the document. */
    #[Property]
    public ?string $description;

    /**
     * The top part &gt; Order total &gt; The total amount of the document, which is calculated as follows:
     * Line Total + Misc.Charges + Freight + Premium Freight – Discount Total+ Tax Total
     */
    #[Property]
    public ?float $orderTotal;

    #[Property]
    public ?float $orderTotalInBaseCurrency;

    /** The top part &gt; VAT taxable total &gt; The document total that is subject to VAT. */
    #[Property]
    public ?float $vatTaxableTotal;

    #[Property]
    public ?float $vatTaxableTotalInBaseCurrency;

    /** The top part &gt; VAT exempt total &gt; The document total that is exempt from VAT. */
    #[Property]
    public ?float $vatExemptTotal;

    #[Property]
    public ?float $vatExemptTotalInBaseCurrency;

    /** The top part &gt; VAT total &gt; The total amount of tax paid on the document. */
    #[Property]
    public ?float $taxTotal;

    #[Property]
    public ?float $taxTotalInBaseCurrency;

    #[Property]
    public ?float $exchangeRate;

    #[Property]
    public ?float $discountTotal;

    #[Property]
    public ?float $discountTotalInBaseCurrency;

    /** Background information collected from the system. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?branchNumberInSalesOrderBasicDto $branchNumber;

    /** Icon Notes on top of the window &gt; Pop-up window for providing any user-defined text connected to the order. */
    #[Property]
    public ?string $note;

    /** The data containing information about the document attachments */
    #[Property]
    public ?array $attachments;

    #[Property]
    public ?string $errorInfo;
}
