<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerClassDtoFactory testFactory()
 */
class CustomerClassDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * The top part > Class ID	> The unique identifier of the class. You can use an
         * alphanumeric string of up to 10 characters.
         */
        public ?string $id = null,
        /** The top part > Description > A detailed description of the customer class. */
        public ?string $description = null,
        /**
         * The General information tab > VAT zone ID >	The default VAT zone for
         * customers of the class.
         */
        public ?string $taxZoneId = null,
        /**
         * The General information tab > Require VAT zone > A check box that means (if
         * selected) that the VAT zone value is required for customers of the class.
         */
        public ?bool $requiredTaxzoneId = null,
        /**
         * The General information tab > Payment method > The payment method used by
         * default in relations with these customers.
         */
        public ?string $paymentMethodId = null,
        /** @var ClassAttributeDto[]|null */
        public ?array $attributes = null,
    ) {}
}
