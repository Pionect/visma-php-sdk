<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Industry Code
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\IndustryCodeInExtendedOrganizationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\IndustryCodeInExtendedOrganizationDtoFactory factory()
 */
class IndustryCodeInExtendedOrganizationDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
