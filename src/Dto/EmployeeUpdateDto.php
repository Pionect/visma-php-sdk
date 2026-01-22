<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class EmployeeUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $employeeClass;

    #[Property]
    public ?\statusInEmployeeUpdateDto $status;

    #[Property]
    public ?\departmentInEmployeeUpdateDto $department;

    #[Property]
    public ?\contactInEmployeeUpdateDto $contact;

    #[Property]
    public ?\addressInEmployeeUpdateDto $address;

    #[Property]
    public ?\DtoValueOfString $branch;

    #[Property]
    public ?\DtoValueOfString $calendar;

    #[Property]
    public ?array $companyTreeInfo;
}
