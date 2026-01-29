<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

class EmployeeUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $employeeClass;

    #[Property]
    public ?statusInEmployeeUpdateDto $status;

    #[Property]
    public ?departmentInEmployeeUpdateDto $department;

    #[Property]
    public ?contactInEmployeeUpdateDto $contact;

    #[Property]
    public ?addressInEmployeeUpdateDto $address;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $branch;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $calendar;

    #[Property]
    public ?array $companyTreeInfo;
}
