<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseIdDescriptionDtoFactory factory()
 */
class WarehouseIdDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
