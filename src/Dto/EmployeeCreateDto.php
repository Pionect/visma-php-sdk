<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class EmployeeCreateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $employeeCd;

    #[Property]
    public ?\DtoValueOfString $department;

    #[Property]
    public ?\DtoValueOfString $employeeClass;

    #[Property]
    public ?\DtoValueOfString $branch;

    #[Property]
    public ?\DtoValueOfString $calendar;

    #[Property]
    public ?\EmployeeContactUpdateDto $contact;

    #[Property]
    public ?\AddressUpdateDto $address;

    #[Property]
    public ?\statusInEmployeeCreateDTO $status;
}
