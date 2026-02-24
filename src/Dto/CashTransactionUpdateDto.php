<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\EntryTypeTaxCalculationModeEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CashTransactionUpdateDtoFactory testFactory()
 */
class CashTransactionUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CashTransactionUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $referenceNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $tranDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $finanacialPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $financialPeriod = null,
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
        public ?EntryTypeTaxCalculationModeEnum $taxCalculationMode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
        /** @var CashTransactionDetailUpdateDto[]|null */
        public ?array $cashTransactionDetails = null,
        /** @var CashTransactionTaxDetailUpdateDto[]|null */
        public ?array $cashTransactionTaxDetails = null,
    ) {}
}
