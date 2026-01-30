<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderV2queryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderV2queryParametersFactory testFactory()
 */
class SalesOrderV2queryParameters extends Model
{
    public function __construct(
        public ?string $orderType = null,
        public ?string $status = null,
        public ?string $greaterThanValue = null,
        public ?bool $showNotes = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
