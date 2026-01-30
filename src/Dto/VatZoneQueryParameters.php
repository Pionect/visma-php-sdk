<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatZoneQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneQueryParametersFactory factory()
 */
class VatZoneQueryParameters extends Model
{
    public function __construct(
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
