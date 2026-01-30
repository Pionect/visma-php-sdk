<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeeUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeUpdateDtoFactory factory()
 */
class EmployeeUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
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
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branch;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $calendar;

    #[Property]
    public ?array $companyTreeInfo;
}
