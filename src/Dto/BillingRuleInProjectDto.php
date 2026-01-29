<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt; Invoicing and allocation settings section &gt; Invoicing rule &gt; The default
 * invoicing rule that is used for the tasks created for the project.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BillingRuleInProjectDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BillingRuleInProjectDtoFactory factory()
 */
class BillingRuleInProjectDto extends Model
{
    #[Property]
    public ?bool $active;

    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
