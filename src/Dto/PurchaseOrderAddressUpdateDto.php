<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderAddressUpdateDtoFactory testFactory()
 */
class PurchaseOrderAddressUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PurchaseOrderAddressUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $addressLine1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $addressLine2 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $addressLine3 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $postalCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $city = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $countryId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $county = null,
    ) {}
}
