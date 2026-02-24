<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\EmployeeStatusEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Claimed by* &gt; 	The name of the employee who is claiming the
 * expenses.
 *
 * @method static \Pionect\VismaSdk\Factories\ClaimedByInExpenseReceiptDtoFactory testFactory()
 */
class ClaimedByInExpenseReceiptDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ClaimedByInExpenseReceiptDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Employee internal user ID. This is the ID of the user linked to the employee */
        public ?string $employeeUserId = null,
        /**
         * Mandatory field: The top part > Employee ID* > The unique identifier, which
         * is assigned to the employee in accordance with the configuration of the
         * EMPLOYEE segmented key.
         */
        public ?int $employeeId = null,
        /**
         * General information tab > Employee settings section > Employee ref. no. > A
         * reference number for the employee.
         */
        public ?string $employeeNumber = null,
        /** The top part > Employee name > The name of this employee. */
        public ?string $employeeName = null,
        /**
         * Mandatory field: The top part > Status > The status of the employee. The
         * following options are available: Active, On hold, Hold payments, Inactive,
         * One-time.
         */
        public ?EmployeeStatusEnum $status = null,
        /**
         * Mandatory field: General information tab > Employee section > Department* >
         * The department the employee works for.
         */
        public ?string $department = null,
        public ?ContactInEmployeeDto $contact = null,
        public ?AddressInEmployeeDto $address = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?EmployeeClassInEmployeeDto $employeeClass = null,
        public ?BranchNumberDto $branch = null,
        #[MapName('calendarID')]
        public ?string $calendarId = null,
        public ?string $employeeLogin = null,
        public ?array $workGroupDescription = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
