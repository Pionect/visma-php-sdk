<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a Sales Category in SalesCategoryController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesCategoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesCategoryDtoFactory factory()
 */
class SalesCategoryDto extends Model
{
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
