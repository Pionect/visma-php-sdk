<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\StocktakePagingQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\StocktakePagingQueryParametersFactory factory()
 */
class StocktakePagingQueryParameters extends Model
{
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
