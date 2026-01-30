<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt; Billing and Allocation settings &gt; Branch information: branch number and name.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInTaskDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInTaskDtoFactory factory()
 */
class BranchInTaskDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
