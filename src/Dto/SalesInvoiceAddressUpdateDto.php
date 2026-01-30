<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesInvoiceAddressUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesInvoiceAddressUpdateDtoFactory factory()
 */
class SalesInvoiceAddressUpdateDto extends Model
{
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
