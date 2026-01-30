<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt; Billing and Allocation Settings &gt; The branch information: branch number and
 * name.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInProjectUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInProjectUpdateDtoFactory testFactory()
 */
class BranchInProjectUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
