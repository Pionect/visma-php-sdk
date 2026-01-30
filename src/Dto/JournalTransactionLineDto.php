<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\JournalTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\JournalTransactionLineDtoFactory testFactory()
 */
class JournalTransactionLineDto extends Model
{
    public function __construct(
        public ?int $lineNumber = null,
        public ?string $accountNumber = null,
        public ?string $description = null,
        public ?SubaccountInJournalTransactionLineDto $subaccount = null,
        public ?string $referenceNumber = null,
        public int|float|null $debitAmount = null,
        public int|float|null $debitAmountInCurrency = null,
        public int|float|null $creditAmount = null,
        public int|float|null $creditAmountInCurrency = null,
        public ?string $transactionDescription = null,
        public ?VatCodeInJournalTransactionLineDto $vatCode = null,
        public ?VatInJournalTransactionLineDto $vat = null,
        public ?string $branch = null,
        public ?string $customerSupplier = null,
        public ?string $transactionType = null,
        public ?string $module = null,
        public ?string $uom = null,
        public ?ProjectInJournalTransactionLineDto $project = null,
        public ?ProjectTaskInJournalTransactionLineDto $projectTask = null,
        public ?array $attachments = null,
        public int|float|null $quantity = null,
        public ?string $inventoryNumber = null,
        public ?string $note = null,
    ) {}
}
