<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashTransactionUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashTransactionUpdateDtoFactory factory()
 */
class CashTransactionUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $referenceNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $tranDate = null,
        public ?FinanacialPeriodInCashTransactionUpdateDto $finanacialPeriod = null,
        public ?FinancialPeriodInCashTransactionUpdateDto $financialPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cashAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $entryType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $documentRef = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $controlTotal = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $vatAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatZone = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $taxCalculationMode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
        public ?array $cashTransactionDetails = null,
        public ?array $cashTransactionTaxDetails = null,
    ) {}
}
