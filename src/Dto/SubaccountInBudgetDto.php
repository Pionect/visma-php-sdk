<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The budget area &gt; The budget articles pane &gt; Subaccount* &gt; The subaccount
 * of the budget article if the article is a leaf on the budget tree.
 */
class SubaccountInBudgetDto extends Model
{
    #[Property]
    public ?bool $active;

    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
