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
        /**
         * The left pane > Categories. See the list of category members on the right
         * side.
         * The right pane > Item ID > The unique identifier of the sales category.
         */
        #[MapName('categoryID')]
        public ?int $categoryId = null,
        /**
         * The right pane > Description > The description of the sales category, which
         * can serve as an identifier.
         */
        public ?string $description = null,
        /** The right pane > Parent category > The primary/main category for Item sales. */
        #[MapName('parentID')]
        public ?int $parentId = null,
        public ?int $sortOrder = null,
        /**
         * @var SalesCategoryDto[]|null
         *                              A list can be expanded on the left side.
         */
        public ?array $subCategories = null,
    ) {}
}
