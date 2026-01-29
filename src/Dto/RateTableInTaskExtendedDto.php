<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Rate table &gt; The rate table to be used in the allocation rules, if applicable.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RateTableInTaskExtendedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RateTableInTaskExtendedDtoFactory factory()
 */
class RateTableInTaskExtendedDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
