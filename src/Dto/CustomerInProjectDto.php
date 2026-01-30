<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Customer &gt; The customer for the project if this project is external.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInProjectDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInProjectDtoFactory factory()
 */
class CustomerInProjectDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
