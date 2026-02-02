<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\WarehouseQueryParametersFactory testFactory()
 */
class WarehouseQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $branch = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
