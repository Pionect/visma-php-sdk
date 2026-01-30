<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; From warehouse* &gt; The warehouse from which the goods are
 * transferred.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInInventoryTransferDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInInventoryTransferDtoFactory factory()
 */
class WarehouseInInventoryTransferDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
