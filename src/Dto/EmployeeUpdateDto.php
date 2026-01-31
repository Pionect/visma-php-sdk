<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeeUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeUpdateDtoFactory testFactory()
 */
class EmployeeUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $employeeClass = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $status = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $department = null,
        public ?ContactInEmployeeUpdateDto $contact = null,
        public ?AddressInEmployeeUpdateDto $address = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $calendar = null,
        public ?array $companyTreeInfo = null,
    ) {}
}
