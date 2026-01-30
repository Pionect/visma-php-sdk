<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialPeriodAmountUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialPeriodAmountUpdateDtoFactory factory()
 */
class FinancialPeriodAmountUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $periodId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $amount = null,
    ) {}
}
