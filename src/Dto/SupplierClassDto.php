<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierClassDtoFactory testFactory()
 */
class SupplierClassDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** @var ClassAttributeDto[]|null */
        public ?array $attributes = null,
        public ?string $paymentMethodId = null,
        public ?string $paymentMethodDescription = null,
        public ?string $timeStamp = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
