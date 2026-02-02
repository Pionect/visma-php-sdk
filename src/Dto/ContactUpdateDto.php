<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ContactUpdateDtoFactory testFactory()
 */
class ContactUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $active = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $title = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $firstName = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lastName = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $position = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $businessAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $sameAsAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\AddressUpdateDto $address = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $email = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $web = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $phone1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $phone2 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $phone3 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $fax = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $contactMethod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $doNotCall = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $doNotFax = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $doNotEmail = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $doNotMail = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $noMassMail = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $noMarketing = null,
    ) {}
}
