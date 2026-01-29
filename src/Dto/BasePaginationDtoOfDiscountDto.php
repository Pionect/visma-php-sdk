<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BasePaginationDtoOfDiscountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BasePaginationDtoOfDiscountDtoFactory factory()
 */
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
