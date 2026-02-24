<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a journal transaction in JournalTransactionController. Used for
 * creating/updating data.
 *
 * @method static \Pionect\VismaSdk\Factories\JournalTransactionUpdateDtoFactory testFactory()
 */
class JournalTransactionUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\JournalTransactionUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $batchNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $transactionDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $postPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $financialPeriod = null,
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
        /** @var JournalTransactionLineUpdateDto[]|null */
        public ?array $journalTransactionLines = null,
    ) {}
}
