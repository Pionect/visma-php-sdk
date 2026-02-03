<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VatCategoryDtoFactory testFactory()
 */
class VatCategoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $vatCategoryId = null,
        public ?string $description = null,
        public ?bool $active = null,
        public ?bool $excludeListedTaxes = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /** @var VatCategoryLineDto[]|null */
        public ?array $vatCategoryLines = null,
    ) {}
}
