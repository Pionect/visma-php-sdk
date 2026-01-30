<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseClaimQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimQueryParametersFactory factory()
 */
class ExpenseClaimQueryParameters extends Model
{
    public function __construct(
        public ?string $status = null,
        public ?\Carbon\Carbon $date = null,
        public ?string $customer = null,
        public ?string $departmentId = null,
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $orderBy = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
