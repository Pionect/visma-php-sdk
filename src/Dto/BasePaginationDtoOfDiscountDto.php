<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class BasePaginationDtoOfDiscountDto extends Model
{
    #[Property]
    public ?int $pageNumber;

    #[Property]
    public ?int $pageSize;

    #[Property]
    public ?int $totalCount;

    #[Property]
    public ?array $records;
}
