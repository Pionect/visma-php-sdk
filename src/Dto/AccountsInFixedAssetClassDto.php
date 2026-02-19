<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Default accounts for the fixed asset using this fixed asset class
 *
 * @method static \Pionect\VismaSdk\Factories\AccountsInFixedAssetClassDtoFactory testFactory()
 */
class AccountsInFixedAssetClassDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The fixed asset account for this fixed asset */
        #[MapName('accountID')]
        public ?string $accountId = null,
        /** The sub account for this fixed asset */
        #[MapName('subAccountID')]
        public ?string $subAccountId = null,
        /** The accrual account for this fixed asset */
        #[MapName('accrualAccountID')]
        public ?string $accrualAccountId = null,
        /** The accrual sub account for this fixed asset */
        #[MapName('accrualSubAccountID')]
        public ?string $accrualSubAccountId = null,
        /** The accumulated depreciation account for this fixed asset */
        #[MapName('accumulatedDepreciationAccountID')]
        public ?string $accumulatedDepreciationAccountId = null,
        /** The accumulated depreciation sub for this fixed asset */
        #[MapName('accumulatedDepreciationSubAccountID')]
        public ?string $accumulatedDepreciationSubAccountId = null,
        /** The depreciation expense account for this fixed asset */
        #[MapName('depreciatedExpenseAccountID')]
        public ?string $depreciatedExpenseAccountId = null,
        /** The depreciation expense sub for this fixed asset */
        #[MapName('depreciatedExpenseSubAccountID')]
        public ?string $depreciatedExpenseSubAccountId = null,
        /** The proceeds account for this fixed asset */
        #[MapName('disposalAccountID')]
        public ?string $disposalAccountId = null,
        /** The proceeds sub for this fixed asset */
        #[MapName('disposalSubAccountID')]
        public ?string $disposalSubAccountId = null,
        /** The gain account for this fixed asset */
        #[MapName('gainAccountID')]
        public ?string $gainAccountId = null,
        /** The gain sub for this fixed asset */
        #[MapName('gainSubAccountID')]
        public ?string $gainSubAccountId = null,
        /** The loss account for this fixed asset */
        #[MapName('lossAccountID')]
        public ?string $lossAccountId = null,
        /** The loss sub for this fixed asset */
        #[MapName('lossSubAccountID')]
        public ?string $lossSubAccountId = null,
        /** The debit account */
        #[MapName('debitAccountID')]
        public ?string $debitAccountId = null,
        /** The debit sub account */
        #[MapName('debitSubAccountID')]
        public ?string $debitSubAccountId = null,
        /** The credit account */
        #[MapName('creditAccountID')]
        public ?string $creditAccountId = null,
        /** The credit sub account */
        #[MapName('creditSubAccountID')]
        public ?string $creditSubAccountId = null,
    ) {}
}
