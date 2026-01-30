<?php

namespace Pionect\VismaSdk\Dto;

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
    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
