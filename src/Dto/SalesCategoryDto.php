<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Sales Category in SalesCategoryController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesCategoryDtoFactory testFactory()
 */
class SalesCategoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('categoryID')]
        public ?int $categoryId = null,
        public ?string $description = null,
        #[MapName('parentID')]
        public ?int $parentId = null,
        public ?int $sortOrder = null,
        public ?array $subCategories = null,
    ) {}
}
