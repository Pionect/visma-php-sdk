<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BasePaginationDtoOfCreditTermDtoFactory testFactory()
 */
class BasePaginationDtoOfCreditTermDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
        public ?int $totalCount = null,
        /** @var CreditTermDto[]|null */
        public ?array $records = null,
    ) {}
}
