<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DepartmentDtoFactory testFactory()
 */
class DepartmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $departmentId = null,
        public ?string $publicId = null,
        public ?string $description = null,
        public ?ExpenseAccountInDepartmentDto $expenseAccount = null,
        public ?ExpenseSubaccountInDepartmentDto $expenseSubaccount = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $timeStamp = null,
    ) {}
}
