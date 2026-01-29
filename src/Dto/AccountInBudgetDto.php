<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The budget area &gt; The budget articles pane &gt; Account* &gt; The account of the
 * budget article if the article is a leaf on the budget tree.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountInBudgetDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountInBudgetDtoFactory factory()
 */
class AccountInBudgetDto extends Model
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
