<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DepartmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DepartmentDtoFactory testFactory()
 */
class DepartmentDto extends Model
{
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
