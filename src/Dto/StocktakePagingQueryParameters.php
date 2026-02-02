<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\StocktakePagingQueryParametersFactory testFactory()
 */
class StocktakePagingQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $warehouse = null,
        public ?string $location = null,
        public ?string $inventory = null,
        public ?string $lotSerialNumber = null,
        public ?string $summaryStatus = null,
        public ?int $startWithLine = null,
        public ?int $endWithLine = null,
        public ?string $freezeDateTime = null,
        public ?string $freezeDateTimeCondition = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $expirationDateTime = null,
        public ?string $expirationDateTimeCondition = null,
        public ?string $status = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
