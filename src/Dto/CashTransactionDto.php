<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CashTransactionStatusEnum;
use Pionect\VismaSdk\Enums\CashTransactionTranTypeEnum;
use Pionect\VismaSdk\Enums\EntryTypeDisableReceiptEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CashTransactionDtoFactory testFactory()
 */
class CashTransactionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The top part > Trans type > 	The type of cash transaction. */
        public ?CashTransactionTranTypeEnum $tranType = null,
        /**
         * The top part > Ref. no. > The unique identifier assigned to the cash
         * transaction in accordance with the numbering sequence.
         */
        public ?string $referenceNbr = null,
        /**
         * The top part > Status > The status of the transaction, which is automatically
         * assigned by the system.
         */
        public ?CashTransactionStatusEnum $status = null,
        /**
         * The top part > Hold > A check box that, if selected, indicates that the
         * transaction is on hold, which means it may be edited but cannot be released.
         */
        public ?bool $hold = null,
        /** Mandatory field: The top part > Trans. date* > The date of the transaction. */
        public ?\Carbon\Carbon $tranDate = null,
        /** The property is now considered obsolete. Use Financial Period instead */
        public ?string $finPeriod = null,
        /**
         * Mandatory field: The top part > Period* > The financial period to which the
         * transaction should be posted.
         */
        public ?string $financialPeriod = null,
        public ?CashAccountInCashTransactionDto $cashAccount = null,
        /** The top part > Currency > The currency of the cash account. */
        public ?string $currency = null,
        public ?EntryTypeInCashTransactionDto $entryType = null,
        /** The top part > Disb./receipt > The basic type of the transaction. */
        public ?EntryTypeDisableReceiptEnum $disbReceipt = null,
        /** The top part > Document ref. > The external document reference number. */
        public ?string $documentRef = null,
        public ?OwnerInCashTransactionDto $owner = null,
        /** The top part > Description > A detailed description of the transaction. */
        public ?string $description = null,
        /** The top part > Amount > The amount of the transaction. */
        public int|float|null $amount = null,
        /**
         * The top part > VAT taxable total > The document total that is subjected to
         * VAT.
         */
        public int|float|null $vatTaxableTotal = null,
        /**
         * The top part > VAT exempt total >  The document total that is exempt from
         * VAT.
         */
        public int|float|null $vatExemptTotal = null,
        /** The top part > VAT total > The total amount of tax paid in the document. */
        public int|float|null $taxTotal = null,
        /**
         * Mandatory field: The top part > Control total > The control total of the
         * transaction.
         */
        public int|float|null $controlTotal = null,
        /**
         * The top part > VAT amount > The VAT amount to be paid for the document. A
         * user enters this amount manually.
         */
        public int|float|null $taxAmount = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * @var TransactionDetailDto[]|null
         *                                  Transaction details tab >
         */
        public ?array $transactionDetails = null,
        /**
         * @var CashTranTaxDetailDto[]|null
         *                                  VAT details tab >
         */
        public ?array $taxDetails = null,
        public ?FinancialsDetailInCashTransactionDto $financialsDetail = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
    ) {}
}
