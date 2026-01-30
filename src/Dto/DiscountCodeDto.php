<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountCodeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountCodeDtoFactory testFactory()
 */
class DiscountCodeDto extends Model
{
    public function __construct(
        public ?string $discountCode = null,
        public ?string $description = null,
        public ?string $discountType = null,
        public ?string $applicableTo = null,
        public ?bool $applyToDeferredRevenue = null,
        public ?bool $manual = null,
        public ?bool $excludeFromDiscountableAmount = null,
        public ?bool $skipDocumentDiscounts = null,
        public ?bool $autoNumbering = null,
        public ?string $lastNumber = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
