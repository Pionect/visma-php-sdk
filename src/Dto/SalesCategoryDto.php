<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Sales Category in SalesCategoryController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesCategoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesCategoryDtoFactory factory()
 */
class SalesCategoryDto extends Model
{
    /**
     * The left pane &gt; Categories. See the list of category members on the right side.
     * The right pane &gt; Item ID &gt; The unique identifier of the sales category.
     */
    #[Property]
    public ?int $categoryId;

    /** The right pane &gt; Description &gt; The description of the sales category, which can serve as an identifier. */
    #[Property]
    public ?string $description;

    /** The right pane &gt; Parent category &gt; The primary/main category for Item sales. */
    #[Property]
    public ?int $parentId;

    #[Property]
    public ?int $sortOrder;

    /** A list can be expanded on the left side. */
    #[Property]
    public ?array $subCategories;
}
