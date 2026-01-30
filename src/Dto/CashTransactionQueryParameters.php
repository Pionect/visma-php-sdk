<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashTransactionQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashTransactionQueryParametersFactory factory()
 */
class CashTransactionQueryParameters extends Model
{
    public function __construct(
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
