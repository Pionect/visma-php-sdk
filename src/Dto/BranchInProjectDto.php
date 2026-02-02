<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Summary tab &gt; Billing and Allocation Settings &gt; The branch information: branch number and
 * name.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInProjectDtoFactory testFactory()
 */
class BranchInProjectDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
