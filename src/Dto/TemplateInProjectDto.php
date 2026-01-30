<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Templated ID &gt; The template used for creating this project, if applicable.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TemplateInProjectDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TemplateInProjectDtoFactory testFactory()
 */
class TemplateInProjectDto extends Model
{
    public function __construct(
        public ?string $status = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
