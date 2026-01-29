<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Business account &gt; The supplier account, if the entry type is used to record transactions that
 * involve a particular supplier, or the customer account,
 * if the entry type is used to record
 * transactions that involve a particular customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BusinessAccountInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BusinessAccountInEntryTypeDtoFactory factory()
 */
class BusinessAccountInEntryTypeDto extends Model
{
    /** Account &gt; The account number. */
    #[Property]
    public ?string $type;

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
