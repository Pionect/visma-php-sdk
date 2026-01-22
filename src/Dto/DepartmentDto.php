<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DepartmentDto extends Model
{
    /** Mandatory field : The table &gt; Department ID* &gt; The unique identifier for the department. */
    #[Property]
    public ?string $departmentId;

    /** Identifies the Department by its publicId */
    #[Property]
    public ?string $publicId;

    /** The table &gt; Description &gt; A detailed description of the department. */
    #[Property]
    public ?string $description;

    #[Property]
    public ?\expenseAccountInDepartmentDto $expenseAccount;

    #[Property]
    public ?\expenseSubaccountInDepartmentDto $expenseSubaccount;

    /** A system generated date/time that indicates the last change for the department. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
