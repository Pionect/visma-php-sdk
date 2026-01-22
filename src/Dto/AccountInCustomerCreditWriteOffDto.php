<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt;  Account * &gt; The sales account used for the transaction.
 */
class AccountInCustomerCreditWriteOffDto extends Model
{
    /** Account class &gt; The identifier of the account class. */
    #[Property]
    public ?string $externalCode1;

    /** Account class &gt; The name of the account class. */
    #[Property]
    public ?string $externalCode2;

    #[Property]
    public ?bool $active;

    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
