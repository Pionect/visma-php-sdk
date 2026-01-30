<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt; Invoicing and allocation settings section &gt; Invoicing rule &gt; The default
 * invoicing rule that is used for the tasks created for the project.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BillingRuleInProjectDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BillingRuleInProjectDtoFactory testFactory()
 */
class BillingRuleInProjectDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
