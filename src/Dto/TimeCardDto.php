<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TimeCardDtoFactory testFactory()
 */
class TimeCardDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $refNbr = null,
        public ?string $status = null,
        public ?string $approvalStatus = null,
        public ?WeekInTimeCardDto $week = null,
        public ?EmployeeInTimeCardDto $employee = null,
        public ?string $type = null,
        public ?string $origRefNbr = null,
        public ?int $timeSpent = null,
        public ?int $invoiceable = null,
        public ?int $overtimeSpent = null,
        public ?int $invoiceableOvertime = null,
        public ?int $totalTimeSpent = null,
        public ?int $invoiceableTotalTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?array $summary = null,
        public ?array $materials = null,
        public ?string $approvalStatusText = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
