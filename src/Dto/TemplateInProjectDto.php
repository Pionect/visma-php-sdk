<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Templated ID &gt; The template used for creating this project, if applicable.
 *
 * @method static \Pionect\VismaSdk\Factories\TemplateInProjectDtoFactory testFactory()
 */
class TemplateInProjectDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $status = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
