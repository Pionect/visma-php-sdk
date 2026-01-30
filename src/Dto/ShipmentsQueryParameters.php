<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentsQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentsQueryParametersFactory factory()
 */
class ShipmentsQueryParameters extends Model
{
    public function __construct(
        public ?int $customerId = null,
        public ?string $customerNumber = null,
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $orderBy = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $status = null,
        public ?int $pageSize = null,
        public ?int $pageNumber = null,
        public ?string $shipmentType = null,
        public ?string $shipmentDate = null,
        public ?string $shipmentDateCondition = null,
        public ?bool $includeCustomFreeFields = null,
    ) {}
}
