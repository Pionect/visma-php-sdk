<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SalesCategoryLineDto extends Model
{
    #[Property]
    public ?int $categoryId;

    #[Property]
    public ?string $description;
}
