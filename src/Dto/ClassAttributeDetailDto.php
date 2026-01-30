<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ClassAttributeDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ClassAttributeDetailDtoFactory factory()
 */
class ClassAttributeDetailDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
