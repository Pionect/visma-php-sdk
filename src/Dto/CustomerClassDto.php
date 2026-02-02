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
        public ?string $id = null,
        public ?string $description = null,
        public ?string $taxZoneId = null,
        public ?bool $requiredTaxzoneId = null,
        public ?string $paymentMethodId = null,
        public ?array $attributes = null,
    ) {}
}
