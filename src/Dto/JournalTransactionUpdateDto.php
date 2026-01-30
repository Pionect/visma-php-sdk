<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a journal transaction in JournalTransactionController. Used for
 * creating/updating data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\JournalTransactionUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\JournalTransactionUpdateDtoFactory factory()
 */
class JournalTransactionUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $batchNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $transactionDate = null,
        public ?PostPeriodInJournalTransactionUpdateDto $postPeriod = null,
        public ?FinancialPeriodInJournalTransactionUpdateDto $financialPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $ledger = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currencyId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $exchangeRate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $autoReversing = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $controlTotalInCurrency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $createVatTransaction = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $skipVatAmountValidation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $transactionCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
        public ?array $journalTransactionLines = null,
    ) {}
}
