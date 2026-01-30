<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BillingRuleIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BillingRuleIdDescriptionDtoFactory testFactory()
 */
class BillingRuleIdDescriptionDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
