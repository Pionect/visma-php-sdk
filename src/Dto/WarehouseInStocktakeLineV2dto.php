<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Warehouse &gt; An info field that shows the warehouse where the stocktaking count
 * is performed.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInStocktakeLineV2dtoFactory testFactory()
 */
class WarehouseInStocktakeLineV2dto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
