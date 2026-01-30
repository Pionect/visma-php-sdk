<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Default Country
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultCountryInExtendedOrganizationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultCountryInExtendedOrganizationDtoFactory testFactory()
 */
class DefaultCountryInExtendedOrganizationDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $errorInfo = null,
    ) {}
}
