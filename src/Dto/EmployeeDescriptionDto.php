<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class EmployeeDescriptionDto extends Model
{
    /** The Financial settings tab &gt; The Financial information section &gt; Owner &gt; Click the magnifier  &gt; Employee ID &gt; The unique identifier, which is assigned to the employee in accordance with the configuration of the EMPLOYEEsegmented key. This information is retrieved from window EP203000. */
    #[Property]
    public ?string $employeeId;

    /** The Financial settings tab &gt; The Financial information section &gt; Owner &gt; Click the magnifier &gt; Employee name &gt; The name of this employee. This information is retrieved from window EP203000. */
    #[Property]
    public ?string $name;
}
