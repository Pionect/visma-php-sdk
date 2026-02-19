<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Summary tab &gt; Billing and Allocation settings &gt; Branch information: branch number and name.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInTaskDtoFactory testFactory()
 */
class BranchInTaskDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
