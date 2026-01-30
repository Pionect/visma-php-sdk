<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderQueryParametersFactory factory()
 */
class SalesOrderQueryParameters extends Model
{
    public function __construct(
        public ?string $orderType = null,
        public ?string $status = null,
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $orderBy = null,
        public ?bool $showNotes = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
