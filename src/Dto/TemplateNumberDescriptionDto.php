<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TemplateNumberDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TemplateNumberDescriptionDtoFactory factory()
 */
class TemplateNumberDescriptionDto extends Model
{
    #[Property]
    public ?string $status;

    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
