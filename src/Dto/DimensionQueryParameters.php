<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DimensionQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DimensionQueryParametersFactory factory()
 */
class DimensionQueryParameters extends Model
{
    public function __construct(
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $orderBy = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?bool $expandSegmentsValues = null,
    ) {}
}
