<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The budget area &gt; The budget articles pane &gt; Subaccount* &gt; The subaccount
 * of the budget article if the article is a leaf on the budget tree.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubaccountInBudgetDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountInBudgetDtoFactory testFactory()
 */
class SubaccountInBudgetDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
