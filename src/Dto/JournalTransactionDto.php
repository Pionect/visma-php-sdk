<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a journal transaction in JournalTransactionController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\JournalTransactionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\JournalTransactionDtoFactory testFactory()
 */
class JournalTransactionDto extends Model
{
    public function __construct(
        public ?string $module = null,
        public ?string $batchNumber = null,
        public ?string $status = null,
        public ?bool $hold = null,
        public ?\Carbon\Carbon $transactionDate = null,
        public ?string $postPeriod = null,
        public ?string $financialPeriod = null,
        public ?string $ledger = null,
        public ?string $ledgerDescription = null,
        public ?string $currencyId = null,
        public int|float|null $exchangeRate = null,
        public ?bool $autoReversing = null,
        public ?bool $reversingEntry = null,
        public ?string $description = null,
        public ?string $originalBatchNumber = null,
        public int|float|null $debitTotal = null,
        public int|float|null $debitTotalInCurrency = null,
        public int|float|null $creditTotal = null,
        public int|float|null $creditTotalInCurrency = null,
        public int|float|null $controlTotal = null,
        public int|float|null $controlTotalInCurrency = null,
        public ?bool $createVatTransaction = null,
        public ?bool $skipVatAmountValidation = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $transactionCode = null,
        public ?string $transactionCodeDescription = null,
        public ?string $branch = null,
        public ?string $timeStamp = null,
        public ?array $journalTransactionLines = null,
        public ?array $attachments = null,
        public ?string $errorInfo = null,
    ) {}
}
