<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an Employee in EmployeeController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeDtoFactory testFactory()
 */
class EmployeeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
