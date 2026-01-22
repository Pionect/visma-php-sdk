<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class FixedAssetTransactionAccountsDto extends Model
{
    /** The debit account */
    #[Property]
    public ?string $debitAccountId;

    /** The debit sub account */
    #[Property]
    public ?string $debitSubAccountId;

    /** The credit account */
    #[Property]
    public ?string $creditAccountId;

    /** The credit sub account */
    #[Property]
    public ?string $creditSubAccountId;
}
