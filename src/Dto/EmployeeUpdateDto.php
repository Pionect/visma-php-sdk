<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\EmployeeUpdateStatusEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\EmployeeUpdateDtoFactory testFactory()
 */
class EmployeeUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\EmployeeUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $employeeClass = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?EmployeeUpdateStatusEnum $status = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $department = null,
        public ?ContactInEmployeeUpdateDto $contact = null,
        public ?AddressInEmployeeUpdateDto $address = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $calendar = null,
        /** @var CompanyTreeInfoDto[]|null */
        public ?array $companyTreeInfo = null,
    ) {}
}
