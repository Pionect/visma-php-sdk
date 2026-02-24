<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\TemplateNumberDescriptionStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TemplateNumberDescriptionDtoFactory testFactory()
 */
class TemplateNumberDescriptionDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\TemplateNumberDescriptionDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?TemplateNumberDescriptionStatusEnum $status = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
