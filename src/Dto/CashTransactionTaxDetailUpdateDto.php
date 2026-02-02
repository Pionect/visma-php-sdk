<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CashTransactionTaxDetailUpdateDtoFactory testFactory()
 */
class CashTransactionTaxDetailUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $taxableAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $vatAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $expenseAmount = null,
    ) {}
}
