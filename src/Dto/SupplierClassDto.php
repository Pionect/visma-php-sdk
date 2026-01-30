<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierClassDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierClassDtoFactory factory()
 */
class SupplierClassDto extends Model
{
    public function __construct(
        public ?array $attributes = null,
        public ?string $paymentMethodId = null,
        public ?string $paymentMethodDescription = null,
        public ?string $timeStamp = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
