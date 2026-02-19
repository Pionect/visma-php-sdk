<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * The accounts used in this fixed asset transaction
 *
 * @method static \Pionect\VismaSdk\Factories\AccountsInFixedAssetTransactionDtoFactory testFactory()
 */
class AccountsInFixedAssetTransactionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
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
