<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * General information tab &gt; Contact section &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\ContactInEmployeeUpdateDtoFactory testFactory()
 */
class ContactInEmployeeUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ContactInEmployeeUpdateDtoFactory> */
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
