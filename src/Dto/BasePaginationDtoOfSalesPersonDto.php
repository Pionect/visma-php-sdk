<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BasePaginationDtoOfSalesPersonDtoFactory testFactory()
 */
class BasePaginationDtoOfSalesPersonDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
        public ?int $totalCount = null,
        /** @var SalesPersonDto[]|null */
        public ?array $records = null,
    ) {}
}
