<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BudgetUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BudgetUpdateDtoFactory factory()
 */
class BudgetUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $ledger = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $financialYear = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $account = null,
        public ?array $subaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $amount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
        public ?array $periods = null,
    ) {}
}
