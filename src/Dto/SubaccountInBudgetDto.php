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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SubaccountInBudgetDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
