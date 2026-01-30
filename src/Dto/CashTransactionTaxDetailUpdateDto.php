<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashTransactionTaxDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashTransactionTaxDetailUpdateDtoFactory factory()
 */
class CashTransactionTaxDetailUpdateDto extends Model
{
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
