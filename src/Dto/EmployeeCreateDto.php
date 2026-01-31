<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeeCreateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeCreateDtoFactory testFactory()
 */
class EmployeeCreateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $employeeCd = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $department = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $employeeClass = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $calendar = null,
        public ?EmployeeContactUpdateDto $contact = null,
        public ?AddressUpdateDto $address = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $status = null,
    ) {}
}
