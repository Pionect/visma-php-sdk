<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeeCreateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeCreateDtoFactory factory()
 */
class EmployeeCreateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $employeeCd;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $department;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $employeeClass;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branch;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $calendar;

    #[Property]
    public ?EmployeeContactUpdateDto $contact;

    #[Property]
    public ?AddressUpdateDto $address;

    #[Property]
    public ?statusInEmployeeCreateDTO $status;
}
