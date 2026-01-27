<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class TimeCardDto extends Model
{
    /** The top part &gt; Ref. no. &gt; The unique reference number of the time card, which Acumatica ERP automatically assigns according to the numbering sequence specified as the Time Card Numbering Sequence on the Time and Expenses Preferences (EP.10.10.00) form. */
    #[Property]
    public ?string $refNbr;

    /** The top part &gt; Status &gt; The status of the time card */
    #[Property]
    public ?string $status;

    /** The top part &gt; Approval status &gt; The approval status of the time card */
    #[Property]
    public ?string $approvalStatus;

    #[Property]
    public ?\weekInTimeCardDto $week;

    #[Property]
    public ?\employeeInTimeCardDto $employee;

    /** The top part &gt; Orig. ref. no. &gt; The reference number of the time card being corrected. This box is filled in only when Correction is specified in the Type box */
    #[Property]
    public ?string $origRefNbr;

    /** The top part &gt; Regular column: Time spent &gt; The work hours spent by the employee during the week on activities with the Regular Hours earning type. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeSpent;

    /** The top part &gt; Regular column: Invoicable &gt; The invoiceable work hours spent by the employee during the week */
    #[Property]
    public ?int $invoiceable;

    /** The top part &gt; Overtime column: Time spent &gt; The work hours spent by the employee during the week on activities with the Overtime earning type. */
    #[Property]
    public ?int $overtimeSpent;

    /** The top part &gt; Overtime column: Invoicable &gt; The invoiceable overtime spent by the employee during the week */
    #[Property]
    public ?int $invoiceableOvertime;

    /** The top part &gt; Total column: Time spent &gt; The total working time (regular and overtime) for the week */
    #[Property]
    public ?int $totalTimeSpent;

    /** The top part &gt; Total column: Invoicable &gt; The total invoiceable working time (regular and overtime) for the week */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $invoiceableTotalTime;

    /** System generated information: The last time the time card line was modified */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Summary tab &gt; Time Card summary information */
    #[Property]
    public ?array $summary;

    /** Summary tab &gt; Time Card materials information */
    #[Property]
    public ?array $materials;

    #[Property]
    public ?string $approvalStatusText;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;
}
