<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\SupplierPaymentStatusEnum;
use Pionect\VismaSdk\Enums\SupplierPaymentTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentDtoFactory testFactory()
 */
class SupplierPaymentDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierPaymentDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * The top part > Type >The type of supplier ledger payment document. The
         * following types are available: Payment, PUrchase credit note, Prepayment,
         * Supplier refund, Voided payment.
         */
        public ?SupplierPaymentTypeEnum $type = null,
        /**
         * The top part > Voucher no. > The unique identifier of the supplier ledger
         * document.
         */
        public ?string $documentType = null,
        /**
         * The top part > Voucher no. > The unique identifier of the supplier ledger
         * document.
         */
        public ?string $refNbr = null,
        /**
         * The top part > Status > The status of the supplier ledger document, which can
         * be one of the following: On Hold, Printed, Open, Reserved, Closed, Voided,
         * Released.
         */
        public ?SupplierPaymentStatusEnum $status = null,
        /**
         * The top part > Hold > A check box that means (if selected) that the status of
         * the document is On hold.
         */
        public ?bool $hold = null,
        /**
         * Mandatory field: The top part > Date* > The date when the payment is applied.
         * The default value is the current business date.
         */
        public ?\Carbon\Carbon $applicationDate = null,
        /**
         * MAndatory field: The top part > Financial period* > The financial period of
         * payment application.
         */
        public ?string $applicationPeriod = null,
        /** The top part > Payment ref. > A payment reference number. */
        public ?string $paymentRef = null,
        public ?SupplierInSupplierPaymentDto $supplier = null,
        public ?LocationInSupplierPaymentDto $location = null,
        /**
         * Mandatory field: The top part > Payment method* > The payment method
         * associated with the supplier.
         */
        public ?string $paymentMethod = null,
        /**
         * Mandatory field: The top part > Cash account* > The cash account associated
         * with the payment method.
         */
        public ?string $cashAccount = null,
        public ?CurrencyInSupplierPaymentDto $currency = null,
        /**
         * The top part > Description > A description for the payment. You may use up to
         * 50 alphanumeric characters.
         */
        public ?string $description = null,
        /**
         * The top part > Payment amount > The total payment amount that should be
         * applied to the documents.
         */
        public int|float|null $paymentAmount = null,
        /**
         * The top part > Finance charges > The total on all finance charges applied to
         * this document.
         */
        public int|float|null $financeCharges = null,
        /**
         * Balance of the payment remaining to be applied and released. Only released
         * applications will count towards the balance.
         */
        public int|float|null $balance = null,
        /**
         * The top part > Unapplied balance > The balance that has not been applied.
         * This will be a non-zero value if the payment amount is not equal to a
         * document's total amount. Checks shall always have a zero unapplied balance.
         */
        public int|float|null $unappliedBalance = null,
        /** The top part > Amount > The amount to be applied on the application date. */
        public int|float|null $appliedAmount = null,
        /**
         * Background information: if this check box is selected, the document has been
         * released.
         */
        public ?bool $released = null,
        /**
         * Background information: The date and time when the document has been last
         * modified.
         */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $branch = null,
        /** @var SupplierPaymentAdjustmentDto[]|null */
        public ?array $paymentLines = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
