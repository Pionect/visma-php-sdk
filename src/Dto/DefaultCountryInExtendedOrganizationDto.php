<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Default Country
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultCountryInExtendedOrganizationDtoFactory testFactory()
 */
class DefaultCountryInExtendedOrganizationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $errorInfo = null,
    ) {}
}
