<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\EmployeeCreateDtoFactory testFactory()
 */
class EmployeeCreateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
