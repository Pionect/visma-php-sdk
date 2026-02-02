<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\EmployeeContactUpdateDtoFactory testFactory()
 */
class EmployeeContactUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $firstName = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lastName = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $middleName = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $email = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $phone1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $phone2 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $phone3 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $fax = null,
    ) {}
}
