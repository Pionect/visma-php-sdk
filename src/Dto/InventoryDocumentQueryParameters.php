<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryDocumentQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryDocumentQueryParametersFactory testFactory()
 */
class InventoryDocumentQueryParameters extends Model
{
    public function __construct(
        public ?string $status = null,
        public ?string $date = null,
        public ?string $dateCondition = null,
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $orderBy = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
