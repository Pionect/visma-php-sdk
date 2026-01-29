<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashAccountDtoFactory factory()
 */
class CashAccountDto extends Model
{
    /** A system generated date/time to indicate when the document was last changed. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** The Entry types tab &gt; */
    #[Property]
    public ?array $entryTypes;

    #[Property]
    public ?string $currency;

    #[Property]
    public ?accountInCashAccountDto $account;

    #[Property]
    public ?subaccountInCashAccountDto $subaccount;

    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
