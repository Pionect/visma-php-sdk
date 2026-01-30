<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BasePaginationDtoOfSalesPersonDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BasePaginationDtoOfSalesPersonDtoFactory testFactory()
 */
class BasePaginationDtoOfSalesPersonDto extends Model
{
    public function __construct(
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
        public ?int $totalCount = null,
        public ?array $records = null,
    ) {}
}
