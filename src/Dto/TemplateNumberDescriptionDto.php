<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TemplateNumberDescriptionDtoFactory testFactory()
 */
class TemplateNumberDescriptionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $status = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
