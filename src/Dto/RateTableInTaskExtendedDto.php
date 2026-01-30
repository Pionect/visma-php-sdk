<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Rate table &gt; The rate table to be used in the allocation rules, if applicable.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RateTableInTaskExtendedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RateTableInTaskExtendedDtoFactory testFactory()
 */
class RateTableInTaskExtendedDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
