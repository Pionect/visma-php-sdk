<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeeTimeCardQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeTimeCardQueryParametersFactory factory()
 */
class EmployeeTimeCardQueryParameters extends Model
{
    public function __construct(
        public ?string $status = null,
        public ?string $week = null,
        public ?string $type = null,
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $orderBy = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $employeeCd = null,
    ) {}
}
