<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DepartmentDtoFactory testFactory()
 */
class DepartmentDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DepartmentDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field : The table > Department ID* > The unique identifier for the
         * department.
         */
        public ?string $departmentId = null,
        /** Identifies the Department by its publicId */
        public ?string $publicId = null,
        /** Description > A detailed description of the department. */
        public ?string $description = null,
        public ?ExpenseAccountInDepartmentDto $expenseAccount = null,
        public ?ExpenseSubaccountInDepartmentDto $expenseSubaccount = null,
        /**
         * A system generated date/time that indicates the last change for the
         * department.
         */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
    ) {}
}
