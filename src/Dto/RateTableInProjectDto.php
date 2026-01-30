<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt; Invoicing and allocation settings section &gt; Rate table &gt; The rate table to be
 * used with the allocation rules, if applicable.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RateTableInProjectDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RateTableInProjectDtoFactory testFactory()
 */
class RateTableInProjectDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
