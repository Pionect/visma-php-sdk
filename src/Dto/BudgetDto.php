<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BudgetDtoFactory testFactory()
 */
class BudgetDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\BudgetDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: The top part > Financial year* > The financial year of the
         * budget.
         */
        public ?string $financialYear = null,
        /**
         * The budget area > The budget articles pane > Released > A check box that
         * indicates (if selected) that the budget article has been released.
         */
        public ?bool $released = null,
        /**
         * The budget area > The budget articles pane > Released amount > The amount
         * that has been released for this article.
         */
        public int|float|null $releasedAmount = null,
        public ?AccountInBudgetDto $account = null,
        public ?SubaccountInBudgetDto $subaccount = null,
        /**
         * Mandatory field: The budget area > The budget articles pane > Description* >
         * A description of the budget article.By default, this column displays the
         * account description.
         */
        public ?string $description = null,
        /** The budget area > The budget articles pane > Amount > The article amount. */
        public int|float|null $amount = null,
        /**
         * The budget area  The budget articles pane > Distributed amount > The amount
         * distributed over the periods.
         */
        public int|float|null $distributedAmount = null,
        /**
         * @var FinancialPeriodAmountDto[]|null
         *                                      The budget area The budget articles pane > Period XX > Amount per period
         *                                      within the financial year.
         */
        public ?array $periods = null,
        /** A system generated date/time not visible in the window. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?BranchNumberInBudgetDto $branchNumber = null,
        /** The timestamp of the budget article, used for concurrency control. */
        public ?string $timeStamp = null,
    ) {}
}
