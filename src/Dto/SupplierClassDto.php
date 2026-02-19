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
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
