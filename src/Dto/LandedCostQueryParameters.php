<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LandedCostQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LandedCostQueryParametersFactory factory()
 */
class LandedCostQueryParameters extends Model
{
    public function __construct(
        public ?string $code = null,
        public ?string $greaterThanValue = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
