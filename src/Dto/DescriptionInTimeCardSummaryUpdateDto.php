<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The description of the reported work hours.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInTimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInTimeCardSummaryUpdateDtoFactory factory()
 */
class DescriptionInTimeCardSummaryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
