<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BudgetDtoFactory testFactory()
 */
class BudgetDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $financialYear = null,
        public ?bool $released = null,
        public int|float|null $releasedAmount = null,
        public ?AccountInBudgetDto $account = null,
        public ?SubaccountInBudgetDto $subaccount = null,
        public ?string $description = null,
        public int|float|null $amount = null,
        public int|float|null $distributedAmount = null,
        /** @var FinancialPeriodAmountDto[]|null */
        public ?array $periods = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?BranchNumberInBudgetDto $branchNumber = null,
        public ?string $timeStamp = null,
    ) {}
}
