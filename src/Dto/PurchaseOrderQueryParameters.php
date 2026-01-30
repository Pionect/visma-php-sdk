<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseOrderQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderQueryParametersFactory factory()
 */
class PurchaseOrderQueryParameters extends Model
{
    public function __construct(
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $orderType = null,
        public ?string $orderStatus = null,
        public ?string $supplier = null,
        public ?string $branch = null,
        public ?string $orderDate = null,
        public ?string $orderDateCondition = null,
        public ?string $deliveryDate = null,
        public ?string $deliveryDateCondition = null,
        public ?bool $includeCustomFreeFields = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
