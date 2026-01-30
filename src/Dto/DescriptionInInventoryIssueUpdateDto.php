<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A brief description of the inventory issue or its transactions.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInInventoryIssueUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInInventoryIssueUpdateDtoFactory testFactory()
 */
class DescriptionInInventoryIssueUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
