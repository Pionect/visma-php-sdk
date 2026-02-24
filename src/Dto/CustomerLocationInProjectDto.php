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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerLocationInProjectDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier > The identifier */
        public ?int $id = null,
        /** Click the magnifier > The displayed name */
        public ?string $name = null,
    ) {}
}
