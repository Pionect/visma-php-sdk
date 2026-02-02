<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TimeCardSummaryDtoFactory testFactory()
 */
class TimeCardSummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNumber = null,
        public ?string $lineId = null,
        public ?EarningTypeInTimeCardSummaryDto $earningType = null,
        public ?ProjectInTimeCardSummaryDto $project = null,
        public ?int $mon = null,
        public ?int $tue = null,
        public ?int $wed = null,
        public ?int $thu = null,
        public ?int $fri = null,
        public ?int $sat = null,
        public ?int $sun = null,
        public ?bool $invoiceable = null,
        public ?ProjectTaskInTimeCardSummaryDto $projectTask = null,
        public ?int $timeSpent = null,
        public ?string $description = null,
        public ?string $approvalStatus = null,
        public ?string $approver = null,
        public ?string $approvalStatusText = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
