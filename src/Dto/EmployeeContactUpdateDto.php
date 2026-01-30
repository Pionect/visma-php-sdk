<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeeContactUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeContactUpdateDtoFactory testFactory()
 */
class EmployeeContactUpdateDto extends Model
{
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
