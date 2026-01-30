<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt; Invoicing and allocation settings section &gt; Allocation rule &gt; The default
 * allocation rule that is used for the tasks created for the project.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AllocationRuleInProjectDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AllocationRuleInProjectDtoFactory factory()
 */
class AllocationRuleInProjectDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
