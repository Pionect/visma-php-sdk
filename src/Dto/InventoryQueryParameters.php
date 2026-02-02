<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryQueryParametersFactory testFactory()
 */
class InventoryQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $pageSize = null,
        #[MapName('alternateID')]
        public ?string $alternateId = null,
        public ?string $inventoryNumber = null,
        public ?int $salesCategory = null,
        public ?bool $addCostPriceStatistics = null,
        public ?string $attributes = null,
        public ?string $description = null,
        public ?string $availabilityLastModifiedDateTime = null,
        public ?string $availabilityLastModifiedDateTimeCondition = null,
        public ?array $inventoryTypes = null,
        public ?bool $expandCrossReference = null,
        public ?bool $expandAttachment = null,
        public ?bool $expandAttribute = null,
        public ?bool $expandWarehouseDetail = null,
        public ?bool $expandAccountInformation = null,
        public ?bool $expandInventoryUnits = null,
        public ?bool $expandSupplierDetails = null,
        public ?bool $expandSalesCategories = null,
        public ?bool $expandNote = null,
        public ?string $attachmentLastModifiedDateTime = null,
        public ?string $attachmentLastModifiedDateTimeCondition = null,
        public ?string $status = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $greaterThanValue = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?int $pageNumber = null,
    ) {}
}
