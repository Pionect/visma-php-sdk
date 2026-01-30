<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonQueryParametersFactory testFactory()
 */
class SalesPersonQueryParameters extends Model
{
    public function __construct(
        #[MapName('salespersonCD')]
        public ?string $salespersonCd = null,
        public ?string $name = null,
        public ?bool $isActive = null,
        public int|float|null $commissionPct = null,
        public ?string $salesSub = null,
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
