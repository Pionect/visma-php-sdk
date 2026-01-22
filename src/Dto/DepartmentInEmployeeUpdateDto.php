<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: General information tab &gt; Employee section &gt; Department* &gt; The department
 * the employee works for.
 */
class DepartmentInEmployeeUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
