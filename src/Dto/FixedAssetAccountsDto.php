<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetAccountsDtoFactory factory()
 */
class FixedAssetAccountsDto extends Model
{
    public function __construct(
        #[MapName('accountID')]
        public ?string $accountId = null,
        #[MapName('subAccountID')]
        public ?string $subAccountId = null,
        #[MapName('accrualAccountID')]
        public ?string $accrualAccountId = null,
        #[MapName('accrualSubAccountID')]
        public ?string $accrualSubAccountId = null,
        #[MapName('accumulatedDepreciationAccountID')]
        public ?string $accumulatedDepreciationAccountId = null,
        #[MapName('accumulatedDepreciationSubAccountID')]
        public ?string $accumulatedDepreciationSubAccountId = null,
        #[MapName('depreciatedExpenseAccountID')]
        public ?string $depreciatedExpenseAccountId = null,
        #[MapName('depreciatedExpenseSubAccountID')]
        public ?string $depreciatedExpenseSubAccountId = null,
        #[MapName('disposalAccountID')]
        public ?string $disposalAccountId = null,
        #[MapName('disposalSubAccountID')]
        public ?string $disposalSubAccountId = null,
        #[MapName('gainAccountID')]
        public ?string $gainAccountId = null,
        #[MapName('gainSubAccountID')]
        public ?string $gainSubAccountId = null,
        #[MapName('lossAccountID')]
        public ?string $lossAccountId = null,
        #[MapName('lossSubAccountID')]
        public ?string $lossSubAccountId = null,
        #[MapName('debitAccountID')]
        public ?string $debitAccountId = null,
        #[MapName('debitSubAccountID')]
        public ?string $debitSubAccountId = null,
        #[MapName('creditAccountID')]
        public ?string $creditAccountId = null,
        #[MapName('creditSubAccountID')]
        public ?string $creditSubAccountId = null,
    ) {}
}
