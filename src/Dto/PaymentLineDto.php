<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CashSaleDocumentTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PaymentLineDtoFactory testFactory()
 */
class PaymentLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PaymentLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Doc. type > The type of document to which the payment is applied. */
        public ?CashSaleDocumentTypeEnum $documentType = null,
        /**
         * Mandatory field: Ref. no.* > The reference number of the invoice or note to
         * which the payment is applied.
         */
        public ?string $refNbr = null,
        /**
         * Amount paid > The amount to be paid which is displayed in the currency of the
         * document that is selected in the window.
         */
        public int|float|null $amountPaid = null,
        /** Cash discount taken > The cash discount to be taken. */
        public int|float|null $cashDiscountTaken = null,
        /** Balance write-off > The amount to be written off. */
        public int|float|null $balanceWriteOff = null,
        public ?WriteOffReasonCodeInPaymentLineDto $writeOffReasonCode = null,
        /** Date > The creation date of the customer ledger document. */
        public ?\Carbon\Carbon $date = null,
        /** Due date > The due date of the customer ledger document. */
        public ?\Carbon\Carbon $dueDate = null,
        /**
         * Cash disount date > The date through which the customer can take a cash
         * discount.
         */
        public ?\Carbon\Carbon $cashDiscountDate = null,
        /**
         * Balance > The balance of the document after the cash discount is taken and
         * the amount is paid.
         */
        public int|float|null $balance = null,
        /**
         * Cash discount balance > The unused amount of the cash discount, in case of
         * partial payment.
         */
        public int|float|null $cashDiscountBalance = null,
        /** Description > A description of the document. */
        public ?string $description = null,
        /** Currency > The currency of the customer ledger document. */
        public ?string $currency = null,
        /**
         * Post period > The financial period to which the transactions recorded in the
         * document should be posted. Format MMYYYY.
         */
        public ?string $postPeriod = null,
        /**
         * Customer order > A reference to a document of the customer, such as a
         * purchase order number.
         */
        public ?string $customerOrder = null,
        /**
         * Cross rate > A cross rate that you can optionally specify between the
         * currency of the payment and currency of the original document.
         */
        public int|float|null $crossRate = null,
    ) {}
}
