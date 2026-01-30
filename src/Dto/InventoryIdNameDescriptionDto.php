<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryIdNameDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryIdNameDescriptionDtoFactory factory()
 */
class InventoryIdNameDescriptionDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
