<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DiscountDtoFactory testFactory()
 */
class DiscountDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $discountCode = null,
        public ?string $series = null,
        public ?string $description = null,
        public ?string $discountBy = null,
        public ?string $breakBy = null,
        public ?bool $promotional = null,
        public ?bool $active = null,
        public ?bool $prorateDiscount = null,
        public ?\Carbon\Carbon $effectiveDate = null,
        public ?\Carbon\Carbon $expirationDate = null,
        public ?\Carbon\Carbon $lastUpdateDate = null,
        public ?int $freeItem = null,
        public ?int $pendingFreeItem = null,
        public ?int $lastFreeItem = null,
        public ?int $lineCntr = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /** @var DiscountBreakpointDto[]|null */
        public ?array $discountBreakpoints = null,
        /** @var DiscountCustomer2dto[]|null */
        public ?array $customers = null,
        /** @var DiscountItemDto[]|null */
        public ?array $items = null,
        /** @var DiscountWarehouseDto[]|null */
        public ?array $warehouses = null,
        /** @var DiscountCustomerPriceClassDto[]|null */
        public ?array $customerPriceClasses = null,
        /** @var DiscountItemPriceClassDto[]|null */
        public ?array $itemPriceClasses = null,
        /** @var DiscountBranchDto[]|null */
        public ?array $branches = null,
        public ?string $errorInfo = null,
    ) {}
}
