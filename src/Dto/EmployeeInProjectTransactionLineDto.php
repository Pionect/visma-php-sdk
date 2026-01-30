<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * Employee &gt; The employee associated with the transaction, such as the employee who worked on the
 * project for the customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeeInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeInProjectTransactionLineDtoFactory factory()
 */
class EmployeeInProjectTransactionLineDto extends Model
{
    public function __construct(
        public ?string $employeeUserId = null,
        public ?int $employeeId = null,
        public ?string $employeeNumber = null,
        public ?string $employeeName = null,
        public ?string $status = null,
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
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
