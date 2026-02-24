<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\JournalTransactionLineModuleEnum;
use Pionect\VismaSdk\Enums\JournalTransactionStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a journal transaction in JournalTransactionController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\JournalTransactionDtoFactory testFactory()
 */
class JournalTransactionDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\JournalTransactionDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * The top part > Workspace > The workspace where the batch originates. New
         * batches can be created only for General ledger.
         */
        public ?JournalTransactionLineModuleEnum $module = null,
        /**
         * The top part > Batch number > The unique ID of the batch, which is generated
         * by the numbering sequence assigned to batches in the GL102000 window.
         */
        public ?string $batchNumber = null,
        /**
         * The top part > Status > The current status of the batch. The status defines
         * what processing can be applied to the batch. The following options are
         * available: On hold, Balanced, Scheduled, Unposted, Posted, Void.
         */
        public ?JournalTransactionStatusEnum $status = null,
        /**
         * The top part > Hold > A check box that indicates (if selected) that the batch
         * has the On hold status and cannot be released or posted. You can clear the
         * check box only if the batch has total debits equal to total credits.
         */
        public ?bool $hold = null,
        /**
         * Mandatory field: The top part > Transaction date* > The date when the batch
         * was created, which relates to the transaction dates of the journal entries.
         */
        public ?\Carbon\Carbon $transactionDate = null,
        /**
         * Mandatory field: The top part > Post period* > The financial period to which
         * the transactions recorded in the document should be posted. Format MMYYYY.
         */
        public ?string $postPeriod = null,
        /**
         * Mandatory field: The top part Post period* > The financial period to which
         * the transactions should be posted. Format YYYYMM.
         */
        public ?string $financialPeriod = null,
        /**
         * Mandatory field: The top part > Ledger* > The unique ID of the ledger to
         * which batch transactions are posted. By default, it is the default posting
         * ledger specified for the branch in the GL101010 window, but another posting
         * ledger can be selected.
         */
        public ?string $ledger = null,
        /**
         * Mandatory field: The top part > Ledger* > Click the magnifier > The
         * description of the ledger to which batch transactions are posted. By default,
         * it is the default posting ledger specified for the branch in the GL101010
         * window, but another posting ledger can be selected.
         */
        public ?string $ledgerDescription = null,
        /**
         * The top part > Currency > The currency used for all the journal transactions
         * in the selected batch.
         */
        public ?string $currencyId = null,
        /** Ingformation collected from the system to calculate currency amount. */
        public int|float|null $exchangeRate = null,
        /**
         * The top part > Automatic reversing > A check box that indicates (if selected)
         * that the batch is auto-reversing.
         */
        public ?bool $autoReversing = null,
        /**
         * The top part > Reversing entry > A check box that indicates (if selected)
         * that the batch is a reversing batch. The Orig.batch number field displays the
         * ID of the batch that was reversed by this batch.
         */
        public ?bool $reversingEntry = null,
        /** The top part > Description > A description of the batch. */
        public ?string $description = null,
        /**
         * The top part > Orig. batch number > For a scheduled or auto-reversing batch,
         * the reference number of the batch used as a template.
         */
        public ?string $originalBatchNumber = null,
        /**
         * The top part > Debit total > The total of transaction debit amounts for the
         * batch; the value is calculated automatically.
         */
        public int|float|null $debitTotal = null,
        /**
         * Background calculation giving you the Debit total in your default currency.
         * This field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $debitTotalInCurrency = null,
        /**
         * The top part > Credit total > The total of transaction credit amounts for the
         * batch; the value is calculated automatically.
         */
        public int|float|null $creditTotal = null,
        /**
         * Background calculation giving you the Credit total in your default currency.
         * This field is applicable if the amount is given in a another currency than
         * your default.
         */
        public int|float|null $creditTotalInCurrency = null,
        /**
         * The top part > Control total > The control total of the batch, which is used
         * for batch status validation.
         */
        public int|float|null $controlTotal = null,
        /**
         * Background calculation giving you the Control total in your default currency.
         * This field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $controlTotalInCurrency = null,
        /**
         * The top part > Create VAT transactions > A check box that indicates (if
         * selected) that a VAT-related transaction can be created manually; select this
         * check box when you begin to create the transaction.
         */
        public ?bool $createVatTransaction = null,
        /**
         * The top part > Skip VAT amount validation > A check box that (if selected)
         * causes automatic validation of a VAT-related transaction that you create
         * manually to be skipped.
         */
        public ?bool $skipVatAmountValidation = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $transactionCode = null,
        /**
         * The Table part > Transaction description > A description of the transaction
         * or any comments relevant to the transaction.
         */
        public ?string $transactionCodeDescription = null,
        /**
         * The top part > Branch >  The branch to which this batch is related. This
         * field is available if your company is set up with branches.
         */
        public ?string $branch = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        /** @var JournalTransactionLineDto[]|null */
        public ?array $journalTransactionLines = null,
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        public ?string $errorInfo = null,
    ) {}
}
