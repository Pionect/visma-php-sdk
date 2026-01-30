<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt; Invoice to section &gt; Customer location &gt; The location of the project's
 * customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerLocationInProjectDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerLocationInProjectDtoFactory factory()
 */
class CustomerLocationInProjectDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
