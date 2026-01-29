<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Templated ID &gt; The template used for creating this project, if applicable.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TemplateInProjectDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TemplateInProjectDtoFactory factory()
 */
class TemplateInProjectDto extends Model
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
