<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; To warehouse &gt; The warehouse to which the goods should be shipped in case of a
 * transfer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ToWarehouseInShipmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ToWarehouseInShipmentDtoFactory factory()
 */
class ToWarehouseInShipmentDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
