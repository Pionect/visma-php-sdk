<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class TimeCardSummaryDto extends Model
{
    /** The time card line number */
    #[Property]
    public ?int $lineNumber;

    /** The time card line id */
    #[Property]
    public ?string $lineId;

    #[Property]
    public ?\earningTypeInTimeCardSummaryDto $earningType;

    #[Property]
    public ?\projectInTimeCardSummaryDto $project;

    /** Mon &gt; The work time reported for Monday, including overtime. */
    #[Property]
    public ?int $mon;

    /** Tue &gt; The work time reported for Tuesday, including overtime. */
    #[Property]
    public ?int $tue;

    /** Wed &gt; The work time reported for Wednesday, including overtime. */
    #[Property]
    public ?int $wed;

    /** Thu &gt; The work time reported for Thursday, including overtime. */
    #[Property]
    public ?int $thu;

    /** Fri &gt; The work time reported for Friday, including overtime. */
    #[Property]
    public ?int $fri;

    /** Sat &gt; The work time reported for Saturday, including overtime. */
    #[Property]
    public ?int $sat;

    /** Sun &gt; The work time reported for Sunday, including overtime. */
    #[Property]
    public ?int $sun;

    /** Invoicable &gt; A check box that you select to indicate that these work hours are invoiceable. */
    #[Property]
    public ?bool $invoiceable;

    #[Property]
    public ?\projectTaskInTimeCardSummaryDto $projectTask;

    /** Time spent &gt; The work time (regular and overtime) that the employee spent on the project and task during the week. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeSpent;

    /** Description &gt; The description of the reported work hours. */
    #[Property]
    public ?string $description;

    /** Approval status &gt; The approval status, which indicates whether the summary row requires approval and, if it does, what the current state of approval is. */
    #[Property]
    public ?string $approvalStatus;

    /** The identifier of the person authorized to approve the activity, if approval is required. This is either the approver of the project task or, if no approver is assigned to the project task, the project manager. */
    #[Property]
    public ?string $approver;

    /** last approval comment &gt; The approval status text suitable for display */
    #[Property]
    public ?string $approvalStatusText;

    /** The last time the time card line was modified */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;
}
