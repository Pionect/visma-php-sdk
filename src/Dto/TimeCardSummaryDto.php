<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\TimeCardSummaryApprovalStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TimeCardSummaryDtoFactory testFactory()
 */
class TimeCardSummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The time card line number */
        public ?int $lineNumber = null,
        /** The time card line id */
        public ?string $lineId = null,
        public ?EarningTypeInTimeCardSummaryDto $earningType = null,
        public ?ProjectInTimeCardSummaryDto $project = null,
        /** Mon > The work time reported for Monday, including overtime. */
        public ?int $mon = null,
        /** Tue > The work time reported for Tuesday, including overtime. */
        public ?int $tue = null,
        /** Wed > The work time reported for Wednesday, including overtime. */
        public ?int $wed = null,
        /** Thu > The work time reported for Thursday, including overtime. */
        public ?int $thu = null,
        /** Fri > The work time reported for Friday, including overtime. */
        public ?int $fri = null,
        /** Sat > The work time reported for Saturday, including overtime. */
        public ?int $sat = null,
        /** Sun > The work time reported for Sunday, including overtime. */
        public ?int $sun = null,
        /**
         * Invoicable > A check box that you select to indicate that these work hours
         * are invoiceable.
         */
        public ?bool $invoiceable = null,
        public ?ProjectTaskInTimeCardSummaryDto $projectTask = null,
        /**
         * Time spent > The work time (regular and overtime) that the employee spent on
         * the project and task during the week.
         */
        public ?int $timeSpent = null,
        /** Description > The description of the reported work hours. */
        public ?string $description = null,
        /**
         * Approval status > The approval status, which indicates whether the summary
         * row requires approval and, if it does, what the current state of approval is.
         */
        public ?TimeCardSummaryApprovalStatusEnum $approvalStatus = null,
        /**
         * The identifier of the person authorized to approve the activity, if approval
         * is required. This is either the approver of the project task or, if no
         * approver is assigned to the project task, the project manager.
         */
        public ?string $approver = null,
        /** last approval comment > The approval status text suitable for display */
        public ?string $approvalStatusText = null,
        /** The last time the time card line was modified */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
