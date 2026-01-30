<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerClassDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerClassDtoFactory factory()
 */
class CustomerClassDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $taxZoneId = null,
        public ?bool $requiredTaxzoneId = null,
        public ?string $paymentMethodId = null,
        public ?array $attributes = null,
    ) {}
}
