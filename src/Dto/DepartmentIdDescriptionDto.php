<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DepartmentIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DepartmentIdDescriptionDtoFactory factory()
 */
class DepartmentIdDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
