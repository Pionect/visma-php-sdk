<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt; Billing and Allocation Settings &gt; The branch information: branch number and
 * name.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInProjectUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInProjectUpdateDtoFactory factory()
 */
class BranchInProjectUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
