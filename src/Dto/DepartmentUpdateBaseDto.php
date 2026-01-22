<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DepartmentUpdateBaseDto extends Model
{
    #[Property]
    public ?string $departmentId;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $expenseAccount;

    #[Property]
    public ?array $expenseSubaccount;
}
