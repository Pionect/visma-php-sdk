<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt; Billing and Allocation settings &gt; Branch information: branch number and name.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInTaskExtendedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInTaskExtendedDtoFactory factory()
 */
class BranchInTaskExtendedDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
