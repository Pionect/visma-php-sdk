<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The account that should be used instead of the reclassification account specified as the default one
 * on the Entry types tab.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReclasificationAccountOverrideInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReclasificationAccountOverrideInEntryTypeDtoFactory factory()
 */
class ReclasificationAccountOverrideInEntryTypeDto extends Model
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
