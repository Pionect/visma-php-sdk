<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesCategoryLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesCategoryLineDtoFactory factory()
 */
class SalesCategoryLineDto extends Model
{
    public function __construct(
        public ?int $categoryId = null,
        public ?string $description = null,
    ) {}
}
