<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The budget area &gt; The budget articles pane &gt; Subaccount* &gt; The subaccount
 * of the budget article if the article is a leaf on the budget tree.
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountInBudgetDtoFactory testFactory()
 */
class SubaccountInBudgetDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
