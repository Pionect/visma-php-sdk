<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Summary tab &gt; Invoice to section &gt; Customer location &gt; The location of the project's
 * customer.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerLocationInProjectDtoFactory testFactory()
 */
class CustomerLocationInProjectDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
