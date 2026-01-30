<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountDtoFactory factory()
 */
class DiscountDto extends Model
{
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
        public ?array $discountBreakpoints = null,
        public ?array $customers = null,
        public ?array $items = null,
        public ?array $warehouses = null,
        public ?array $customerPriceClasses = null,
        public ?array $itemPriceClasses = null,
        public ?array $branches = null,
        public ?string $errorInfo = null,
    ) {}
}
