<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AllocationRuleIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AllocationRuleIdDescriptionDtoFactory testFactory()
 */
class AllocationRuleIdDescriptionDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
