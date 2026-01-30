<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCategoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCategoryDtoFactory testFactory()
 */
class VatCategoryDto extends Model
{
    public function __construct(
        public ?string $vatCategoryId = null,
        public ?string $description = null,
        public ?bool $active = null,
        public ?bool $excludeListedTaxes = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?array $vatCategoryLines = null,
    ) {}
}
