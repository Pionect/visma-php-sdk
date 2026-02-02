<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Industry Code
 *
 * @method static \Pionect\VismaSdk\Factories\IndustryCodeInExtendedOrganizationDtoFactory testFactory()
 */
class IndustryCodeInExtendedOrganizationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
