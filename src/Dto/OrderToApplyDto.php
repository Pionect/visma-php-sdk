<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\SalesOrderQueryParametersStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an OrderToApply in Payments
 *
 * @method static \Pionect\VismaSdk\Factories\OrderToApplyDtoFactory testFactory()
 */
class OrderToApplyDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: Order type* > The order type for which the payment is to be
         * reserved.
         */
        public ?string $orderType = null,
        /**
         * Mandatory field: Order no.* > The reference number of the order for which the
         * payment is reserved.
         */
        public ?string $orderNo = null,
        /** Status > The status of the document, which is assigned automatically. */
        public ?SalesOrderQueryParametersStatusEnum $status = null,
        /** Applied to order > The total amount reserved for the order. */
        public int|float|null $appliedToOrder = null,
        /** Transferred to invoice > The amount that has been applied to invoice. */
        public int|float|null $transferredToInvoice = null,
        /** Date > The creation date of the order. */
        public ?\Carbon\Carbon $date = null,
        /** Due date > The due date of the order. */
        public ?\Carbon\Carbon $dueDate = null,
        /**
         * Cash discount date > The date through which the customer can take a cash
         * discount.
         */
        public ?\Carbon\Carbon $cashDiscountDate = null,
        /**
         * Balance > The balance of the order after the cash discount is taken and the
         * amount is paid.
         */
        public int|float|null $balance = null,
        /** Description > A description of the order. */
        public ?string $description = null,
        /** Order total > The total amount of the document. */
        public int|float|null $orderTotal = null,
        /** Currency > The currency of the document. */
        public ?string $currency = null,
        /** Invoice no. > The reference number of the invoice generated for the order. */
        public ?string $invoiceNbr = null,
        /** Invoice date > The date of the invoice. */
        public ?\Carbon\Carbon $invoiceDate = null,
    ) {}
}
