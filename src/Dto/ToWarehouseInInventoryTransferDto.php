<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; To warehouse &gt; The warehouse to which the goods are
 * transferred.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ToWarehouseInInventoryTransferDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ToWarehouseInInventoryTransferDtoFactory factory()
 */
class ToWarehouseInInventoryTransferDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
