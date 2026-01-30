<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BudgetDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BudgetDtoFactory factory()
 */
class BudgetDto extends Model
{
    public function __construct(
        public ?string $financialYear = null,
        public ?bool $released = null,
        public int|float|null $releasedAmount = null,
        public ?AccountInBudgetDto $account = null,
        public ?SubaccountInBudgetDto $subaccount = null,
        public ?string $description = null,
        public int|float|null $amount = null,
        public int|float|null $distributedAmount = null,
        public ?array $periods = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?BranchNumberInBudgetDto $branchNumber = null,
        public ?string $timeStamp = null,
    ) {}
}
