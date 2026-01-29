<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesCategoryLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesCategoryLineDtoFactory factory()
 */
class SalesCategoryLineDto extends Model
{
    #[Property]
    public ?int $categoryId;

    #[Property]
    public ?string $description;
}
