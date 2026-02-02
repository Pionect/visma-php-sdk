<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SalesCategoryLineDtoFactory testFactory()
 */
class SalesCategoryLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $categoryId = null,
        public ?string $description = null,
    ) {}
}
