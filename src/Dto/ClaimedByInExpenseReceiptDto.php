<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Claimed by* &gt; 	The name of the employee who is claiming the
 * expenses.
 */
class ClaimedByInExpenseReceiptDto extends Model
{
    /** Employee internal user ID. This is the ID of the user linked to the employee */
    #[Property]
    public ?string $employeeUserId;

    /** Mandatory field: The top part &gt; Employee ID* &gt; The unique identifier, which is assigned to the employee in accordance with the configuration of the EMPLOYEE segmented key. */
    #[Property]
    public ?int $employeeId;

    /** General information tab &gt; Employee settings section &gt; Employee ref. no. &gt; A reference number for the employee. */
    #[Property]
    public ?string $employeeNumber;

    /** The top part &gt; Employee name &gt; The name of this employee. */
    #[Property]
    public ?string $employeeName;

    /** Mandatory field: The top part &gt; Status &gt; The status of the employee. The following options are available: Active, On hold, Hold payments, Inactive, One-time. */
    #[Property]
    public ?string $status;

    /** Mandatory field: General information tab &gt; Employee section &gt; Department* &gt; The department the employee works for. */
    #[Property]
    public ?string $department;

    #[Property]
    public ?contactInEmployeeDto $contact;

    #[Property]
    public ?addressInEmployeeDto $address;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?employeeClassInEmployeeDto $employeeClass;

    #[Property]
    public ?BranchNumberDto $branch;

    #[Property]
    public ?string $calendarId;

    #[Property]
    public ?string $employeeLogin;

    #[Property]
    public ?array $workGroupDescription;

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
