<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT category &gt; The tax category for the project task.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxCategoryInTaskExtendedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInTaskExtendedDtoFactory factory()
 */
class TaxCategoryInTaskExtendedDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
