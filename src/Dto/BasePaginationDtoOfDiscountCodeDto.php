<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BasePaginationDtoOfDiscountCodeDtoFactory testFactory()
 */
class BasePaginationDtoOfDiscountCodeDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\BasePaginationDtoOfDiscountCodeDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
        public ?int $totalCount = null,
        /** @var DiscountCodeDto[]|null */
        public ?array $records = null,
    ) {}
}
