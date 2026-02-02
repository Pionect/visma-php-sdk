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
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
