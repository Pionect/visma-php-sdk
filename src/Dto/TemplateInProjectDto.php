<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\TemplateNumberDescriptionStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Templated ID &gt; The template used for creating this project, if applicable.
 *
 * @method static \Pionect\VismaSdk\Factories\TemplateInProjectDtoFactory testFactory()
 */
class TemplateInProjectDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\TemplateInProjectDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?TemplateNumberDescriptionStatusEnum $status = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
