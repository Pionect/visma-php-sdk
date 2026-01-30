<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * The accounts used in this fixed asset transaction
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountsInFixedAssetTransactionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountsInFixedAssetTransactionDtoFactory testFactory()
 */
class AccountsInFixedAssetTransactionDto extends Model
{
    public function __construct(
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
