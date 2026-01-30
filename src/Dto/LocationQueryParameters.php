<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationQueryParametersFactory factory()
 */
class LocationQueryParameters extends Model
{
    public function __construct(
        public ?string $locationId = null,
        public ?string $gln = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $greaterThanValue = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
