<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BasePaginationDtoOfKitSpecificationDtoFactory testFactory()
 */
class BasePaginationDtoOfKitSpecificationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
        public ?int $totalCount = null,
        /** @var KitSpecificationDto[]|null */
        public ?array $records = null,
    ) {}
}
