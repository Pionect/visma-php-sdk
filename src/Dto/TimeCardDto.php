<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\EmployeeTimeCardQueryParametersStatusEnum;
use Pionect\VismaSdk\Enums\EmployeeTimeCardQueryParametersTypeEnum;
use Pionect\VismaSdk\Enums\TimeCardSummaryApprovalStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TimeCardDtoFactory testFactory()
 */
class TimeCardDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * The top part > Ref. no. > The unique reference number of the time card, which
         * Acumatica ERP automatically assigns according to the numbering sequence
         * specified as the Time Card Numbering Sequence on the Time and Expenses
         * Preferences (EP.10.10.00) form.
         */
        public ?string $refNbr = null,
        /** The top part > Status > The status of the time card */
        public ?EmployeeTimeCardQueryParametersStatusEnum $status = null,
        /** The top part > Approval status > The approval status of the time card */
        public ?TimeCardSummaryApprovalStatusEnum $approvalStatus = null,
        public ?WeekInTimeCardDto $week = null,
        public ?EmployeeInTimeCardDto $employee = null,
        /**
         * The top part > Type > The type of the time card. The following options are
         * available:• Normal: Regular time card• Correction: Corrective time card,
         * which is a time card that updates a released time card
         */
        public ?EmployeeTimeCardQueryParametersTypeEnum $type = null,
        /**
         * The top part > Orig. ref. no. > The reference number of the time card being
         * corrected. This box is filled in only when Correction is specified in the
         * Type box
         */
        public ?string $origRefNbr = null,
        /**
         * The top part > Regular column: Time spent > The work hours spent by the
         * employee during the week on activities with the Regular Hours earning type.
         */
        public ?int $timeSpent = null,
        /**
         * The top part > Regular column: Invoicable > The invoiceable work hours spent
         * by the employee during the week
         */
        public ?int $invoiceable = null,
        /**
         * The top part > Overtime column: Time spent > The work hours spent by the
         * employee during the week on activities with the Overtime earning type.
         */
        public ?int $overtimeSpent = null,
        /**
         * The top part > Overtime column: Invoicable > The invoiceable overtime spent
         * by the employee during the week
         */
        public ?int $invoiceableOvertime = null,
        /**
         * The top part > Total column: Time spent > The total working time (regular and
         * overtime) for the week
         */
        public ?int $totalTimeSpent = null,
        /**
         * The top part > Total column: Invoicable > The total invoiceable working time
         * (regular and overtime) for the week
         */
        public ?int $invoiceableTotalTime = null,
        /** System generated information: The last time the time card line was modified */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * @var TimeCardSummaryDto[]|null
         *                                Summary tab > Time Card summary information
         */
        public ?array $summary = null,
        /**
         * @var TimeCardMaterialsDto[]|null
         *                                  Summary tab > Time Card materials information
         */
        public ?array $materials = null,
        public ?string $approvalStatusText = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
