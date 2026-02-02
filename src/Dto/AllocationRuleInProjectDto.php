<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Summary tab &gt; Invoicing and allocation settings section &gt; Allocation rule &gt; The default
 * allocation rule that is used for the tasks created for the project.
 *
 * @method static \Pionect\VismaSdk\Factories\AllocationRuleInProjectDtoFactory testFactory()
 */
class AllocationRuleInProjectDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
