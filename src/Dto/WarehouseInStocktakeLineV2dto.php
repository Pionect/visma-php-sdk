<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Warehouse &gt; An info field that shows the warehouse where the stocktaking count
 * is performed.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInStocktakeLineV2dtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInStocktakeLineV2dtoFactory factory()
 */
class WarehouseInStocktakeLineV2dto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
