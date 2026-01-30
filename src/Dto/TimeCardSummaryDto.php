<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TimeCardSummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TimeCardSummaryDtoFactory testFactory()
 */
class TimeCardSummaryDto extends Model
{
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
