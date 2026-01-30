<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseQueryParametersFactory testFactory()
 */
class WarehouseQueryParameters extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $branch = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
