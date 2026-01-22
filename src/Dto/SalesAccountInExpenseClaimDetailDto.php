<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Sales account &gt; The sales account to which the system should record the part of the amount to
 * charge the customer for. This is applicable only when a customer has been specified.
 */
class SalesAccountInExpenseClaimDetailDto extends Model
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
