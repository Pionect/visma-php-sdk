<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Customer &gt; The customer for the project if this project is external.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInProjectBasicDtoFactory testFactory()
 */
class CustomerInProjectBasicDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
