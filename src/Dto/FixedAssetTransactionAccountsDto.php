<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\FixedAssetTransactionAccountsDtoFactory testFactory()
 */
class FixedAssetTransactionAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
