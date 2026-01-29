<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Warehouse ID* &gt; The warehouse from which the goods should be
 * shipped.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FromWarehouseInShipmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FromWarehouseInShipmentDtoFactory factory()
 */
class FromWarehouseInShipmentDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
