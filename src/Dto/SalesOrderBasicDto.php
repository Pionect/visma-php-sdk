<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\SalesOrderQueryParametersStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a SOOrder in SOOrderController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderBasicDtoFactory testFactory()
 */
class SalesOrderBasicDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** @var SalesOrderDocumentLineDto[]|null */
        public ?array $lines = null,
        /**
         * Mandatory field: The top part > Order type > The type of the document, which
         * is one of the predefined order types or a custom order type created by using
         * the (SO201000) window.
         */
        public ?string $orderType = null,
        /** The top part > Order no.: > The reference number of the document. */
        public ?string $orderNo = null,
        /**
         * The top part > Status > The status of the document, which can be one of the
         * following options: On hold, Credit hold, Pending aååroval, Rejected, Open,
         * Cancelled, Shipping, Back order, Invoiced, Completed.
         */
        public ?SalesOrderQueryParametersStatusEnum $status = null,
        /**
         * The top part > Hold > A check box that you select if the document is on hold
         * and should not be processed further at this time.
         */
        public ?bool $hold = null,
        /** Mandatory field: The top part > Date* >  The date of the document. */
        public ?\Carbon\Carbon $date = null,
        /**
         * Mandatory field: The top part > Requested on > The date when the customer
         * wants to receive the goods; this date provides the default values for the
         * Requested on dates for order lines.
         */
        public ?\Carbon\Carbon $requestOn = null,
        /**
         * The top part > Customer order > The reference number of the original customer
         * document that the sales order is based on.
         */
        public ?string $customerOrder = null,
        /**
         * The top part > External reference > The reference number of the sales order
         * in a third-party application if Visma.net Financials is integrated with such
         * an application and imports the sales orders from it.
         */
        public ?string $customerRefNo = null,
        public ?CustomerInSalesOrderBasicDto $customer = null,
        /** The top part > Contact > The contact person of the customer. */
        public ?int $contactId = null,
        public ?LocationInSalesOrderBasicDto $location = null,
        /** The top part > Currency > The currency of the document. */
        public ?string $currency = null,
        /** The top part > Description > A brief description of the document. */
        public ?string $description = null,
        /**
         * The top part > Order total > The total amount of the document, which is
         * calculated as follows:
         * Line Total + Misc.Charges + Freight + Premium Freight – Discount Total+ Tax
         * Total
         */
        public int|float|null $orderTotal = null,
        public int|float|null $orderTotalInBaseCurrency = null,
        /** The top part > VAT taxable total > The document total that is subject to VAT. */
        public int|float|null $vatTaxableTotal = null,
        public int|float|null $vatTaxableTotalInBaseCurrency = null,
        /** The top part > VAT exempt total > The document total that is exempt from VAT. */
        public int|float|null $vatExemptTotal = null,
        public int|float|null $vatExemptTotalInBaseCurrency = null,
        /** The top part > VAT total > The total amount of tax paid on the document. */
        public int|float|null $taxTotal = null,
        public int|float|null $taxTotalInBaseCurrency = null,
        public int|float|null $exchangeRate = null,
        public int|float|null $discountTotal = null,
        public int|float|null $discountTotalInBaseCurrency = null,
        /** Background information collected from the system. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?BranchNumberInSalesOrderBasicDto $branchNumber = null,
        /**
         * Icon Notes on top of the window > Pop-up window for providing any
         * user-defined text connected to the order.
         */
        public ?string $note = null,
        /**
         * @var AttachmentDto[]|null
         *                           The data containing information about the document attachments
         */
        public ?array $attachments = null,
        public ?string $errorInfo = null,
    ) {}
}
