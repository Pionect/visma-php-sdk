<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Summary tab &gt; Invoicing and allocation settings section &gt; Invoicing rule &gt; The default
 * invoicing rule that is used for the tasks created for the project.
 *
 * @method static \Pionect\VismaSdk\Factories\BillingRuleInProjectDtoFactory testFactory()
 */
class BillingRuleInProjectDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
