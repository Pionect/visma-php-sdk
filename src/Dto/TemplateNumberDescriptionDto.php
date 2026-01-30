<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TemplateNumberDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TemplateNumberDescriptionDtoFactory testFactory()
 */
class TemplateNumberDescriptionDto extends Model
{
    public function __construct(
        public ?string $status = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
